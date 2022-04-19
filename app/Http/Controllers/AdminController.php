<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
  
  // Auth Method
  public function login() {
    return view("auth.admin", [
      "title" => "Login Admin"
    ]);
  }

  public function authLogin(Request $request) {
    $credentials = $request->validate([
      'username' => ['required'],
      'password' => ['required'],
    ]);
    // karena dari view nya ngirim input name = password

    if (Auth::guard("admin")->attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('/admin');
    }

    return back()->withErrors([
      'username' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
  }

  public function logout(Request $request) {
    Auth::guard("admin")->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/admin/login');
  }
  // End Auth Method
  
  // CRUD Method
  public function destroy(User $user) {
    if($user->delete()) {
      return back()->with('destroy', 'Data siswa berhasil dihapus');
    }
  }

  public function destroyAll() {
    DB::table('users')->truncate();

    return redirect('/admin')->with('destroyAll', 'Semua data siswa berhasil dihapus');
  }
  
  // View Update
  public function edit(User $user) {
    $isPass = ['Lulus', 'Tidak Lulus'];
    $isPaid = ['Lunas', 'Belum Lunas'];

    return view('main.edit', [
      'title' => 'Edit User',
      'user' => $user,
      'isPass' => $isPass,
      'isPaid' => $isPaid
    ]);
  }
  
  // Logic update
  public function update(Request $request, User $user) {
    $validData = $request->validate([
      'nisn' => 'required',
      'exam_num' => 'required',
      'fullname' => 'required',
      'class' => 'required',
      'isPass' => 'required',
      'isPaid' => 'required',
    ]);

    User::where('id', $user->id)->update($validData);

    return redirect('/admin')->with('update', 'Data siswa berhasil diupdate');
  }
  
  // View create
  public function create(Request $request) {
    $isPass = ['Lulus', 'Tidak Lulus'];
    $isPaid = ['Lunas', 'Belum Lunas'];

    return view('main.create', [
      'title' => 'Tambah Siswa',
      'isPass' => $isPass,
      'isPaid' => $isPaid
    ]);
  }
  
  // View import
  public function importFile() {
    return view('main.import', [
      "title" => "Import Dari Excel"
    ]);
  }
  
  // Logic Import
  public function import(Request $request) {

    $collection = Excel::toCollection(new UsersImport, $request->file('xlsx'));

    foreach( $collection[0] as $row ) {

      if($row[0] !== 'nisn') {
        
        $fulldate = str_split($row[3]); // [2, 0, 0, 3, 1, 1, 0, 3]
        $year = implode('', array_slice($fulldate, 0, 4)); // 2003
        $month = implode('', array_slice($fulldate, 4, 2)); // 11
        $day = implode('', array_slice($fulldate, 6, 2)); // 03
        
        $fulldate = implode('', [$day, $month, $year]);
        $row[3] = bcrypt($fulldate);

        // store ke db
        User::create([
          'nisn' => $row[0],
          'exam_num' => $row[1],
          'fullname' => $row[2],
          'password' => $row[3],
          'class' => $row[4],
          'isPass' => $row[5],
          'isPaid' => $row[6]
        ]);
        

      }
    }

    return redirect('/admin')->with('create', 'Data berhasil ditambahkan');


  }
  
  // Logic create
  public function store(Request $request) {
    $validData = $request->validate([
      'nisn' => 'required',
      'exam_num' => 'required',
      'fullname' => 'required',
      'password' => 'required',
      'class' => 'required',
      'isPass' => 'required',
      'isPaid' => 'required'
    ]);

    // jika lolos
    $validData['password'] = bcrypt($request['password']);

    User::create($validData);

    return redirect('/admin')->with('create', 'Data berhasil ditambahkan');

  }
  // End CRUD method
  

}