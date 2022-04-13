<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
  public function login() {
    return view("auth.login", [
      "title" => "Login Siswa"
    ]);
  }

  public function authLogin(Request $request) {
    $credentials = $request->validate([
      'nisn' => ['required'],
      'password' => ['required'], 
    ]);
    
    // karena dari view nya ngirim input name = password

    if (Auth::guard("user")->attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('/siswa');
    }

    return back()->withErrors([
      'nisn' => 'The provided credentials do not match our records.',
    ])->onlyInput('nisn');
  }
  
  public function logout(Request $request) {
    Auth::guard("user")->logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/siswa/login');
  }
  
}