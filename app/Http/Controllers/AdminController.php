<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
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

  public function destroy(User $user) {
    if($user->delete()) {
      return back()->with('destroy', 'Data siswa berhasil dihapus');
    }
  }

  public function destroyAll() {
    DB::table('users')->truncate();

    return redirect('/admin')->with('destroyAll', 'Semua data siswa berhasil dihapus');
  }

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

}