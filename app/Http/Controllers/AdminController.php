<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}