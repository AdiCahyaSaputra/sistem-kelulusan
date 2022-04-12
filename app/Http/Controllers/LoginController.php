<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
  public function login() {
    return view("auth.login", [
      "title" => "Login"
    ]);
  }

  public function authLogin(Request $request) {
    $credentials = $request->validate([
      'nisn' => ['required'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('/');
    }

    return back()->withErrors([
      'nisn' => 'The provided credentials do not match our records.',
    ])->onlyInput('nisn');
  }
  
  public function logout(Request $request) {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
  }
  
}