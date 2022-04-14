<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/siswa', function () {
    return view("main.home", [
      "title" => "Home"
    ]);
})->middleware('auth:user');

Route::controller(LoginController::class)->group(function() {
  Route::get("/siswa/login", "login")->name("login")->middleware("guest:user");
  Route::post("/login", "authLogin")->middleware('guest:user');
  Route::post("/siswa/logout", "logout")->middleware("auth:user");
  
});

Route::get("/admin", function() {
  $users = User::all();
  return view("main.dashboard", [
    "title" => "Admin Dashboard",
    'users' => $users
  ]);
})->middleware("auth:admin");


Route::controller(AdminController::class)->group(function() {
  Route::get("/admin/login", "login")->name('admin')->middleware("guest:admin");
  Route::post("/admin", "authLogin")->middleware('guest:admin');
  Route::post("/admin/logout", "logout")->middleware('auth:admin');
  
});