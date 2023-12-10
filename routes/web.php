<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::view('/','welcome')->name('go_welcome');

//route::get('register',[RegisterController::class, 'create']);
route::view('register','auth.register');

//route::view('login','auth.login')->name('gologin');

route::get('login',[LoginController::class, 'create'])->name('login');

route::post('auth.register',[RegisterController::class, 'store'])->name('auth.register');

route::post('auth.login', [LoginController::class, 'store'])->name('auth.login');

route::post('tasks.create',[TaskController::class, 'store'])->name('tasks.store');

route::view('main','tasks.main')->name('main');

route::get('tasks.main',[TaskController::class, 'index'])->name('tasks.main');

//route::view('create','tasks.create')->name('create');

route::get('tasks.create',[TaskController::class, 'create'])->name('tasks22.create');