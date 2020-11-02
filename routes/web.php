<?php

use Illuminate\Support\Facades\Route;

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
  return view('pages.home');
});

Route::get('dashboard', "DashboardController@index")->name("dashboard");
Route::get('login', "Auth\LoginController@index")->name("login");


Route::get('post', "postController@index")->name("post");
Route::get('post/{post:slug}', "postController@slug")->name("post.slug");
