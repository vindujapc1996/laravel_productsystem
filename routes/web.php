<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DbController;



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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/index2',[HomeController::class,'index2'])->name('index2');
Route::get('/index3',[HomeController::class,'index3'])->name('index3');

Route::get('/admin_home_index',[HomeController::class,'admin_home_index'])->name('admin_home_index');
Route::get('/user_home.blade.php',[HomeController::class,'user_home'])->name('user_home');
Route::get('/customer_home',[HomeController::class,'customer_home'])->name('customer_home');

Route::get('/admin_login',[LoginController::class,'admin_login'])->name('admin_login');
Route::post('/log',[LoginController::class,'log'])->name('log');

Route::get('/user_login',[LoginController::class,'user_login'])->name('user_login');
Route::post('/user_log',[LoginController::class,'user_log'])->name('user_log');
Route::get('/user_registration',[PageController::class,'user_registration'])->name('user_registration');
Route::post('/register',[PageController::class,'register'])->name('register');

Route::get('/customer_registration',[PageController::class,'customer_registration'])->name('customer_registration');
Route::post('/custom_reg',[PageController::class,'custom_reg'])->name('custom_reg');
Route::get('/customer_login',[LoginController::class,'customer_login'])->name('customer_login');
Route::post('/cust_log',[LoginController::class,'cust_log'])->name('cust_log');
Route::get('/customer_view',[ProductController::class,'customer_view'])->name('customer_view');

Route::get('product_registration',[ProductController::class,'product_registration'])->name('product_registration');
Route::post('/product_reg',[ProductController::class,'product_reg'])->name('product_reg');

Route::get('/admin_view',[ProductController::class,'admin_view'])->name('admin_view');
Route::get('/delete/{id}',[DbController::class,'delete'])->name('delete');
Route::get('/admin_view_edit/{id}',[DbController::class,'admin_view_edit'])->name('admin_view_edit');

Route::get('/admin_view_edit/{id}',[DbController::class,'admin_view_edit'])->name('admin_view_edit');
Route::post('/update/{id}',[DbController::class,'update'])->name('update');
Route::get('/update1/{id}', [ProductController::class, 'update1'])->name('update1');



