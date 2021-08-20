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
// Beranda
Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
// Table
Route::post('/jadwalkuliah', [App\Http\Controllers\JdKuliahController::class, 'jdkuliah'])->name('post_jdkuliah');
Route::get('/jadwalkuliah', [App\Http\Controllers\JdKuliahController::class, 'index'])->name('jdkuliah');



Route:: view ('/jadwalujian','v_jadwalujian');
Route:: view ('/panduan','v_panduan');
Route:: view ('/kalender','v_kalender');


// Auth::routes();
Route::get('login', [App\Http\Controllers\Auth\LoginCustomController::class, 'index'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginCustomController::class, 'login'])->name('post_login');
// Route::get('logout', [App\Http\Controllers\Auth\LoginCustomController::class, 'logout']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
