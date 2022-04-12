<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view("main.home", [
      "title" => "Home"
    ]);
})->middleware('auth');


Route::controller(LoginController::class)->group(function() {
  Route::get("/login", "login")->name("login");
  Route::post("/login", "authLogin");
  Route::post("/logout", "logout");
});