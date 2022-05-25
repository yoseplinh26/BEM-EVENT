<?php

use App\Http\Controllers\admin\AcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\KategoriController;


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

// Route::get('/', function () {
//     return view('admin.login');
// });


// Route::get('/login', [AuthenticateController::class, 'login'])->name('login');


// Route::post('/authenticate', [AuthenticateController::class, 'authenticate']);

// Route::get('/',  function () {
//         return 'test';
//     });


// Route::get('/index', [AuthenticateController::class, 'index']);
// Route::get('/kategori', [AuthenticateController::class, 'index']);
// Route::get('/dashboard', [AuthenticateController::class, 'dashboard']);


// Route::post('/logout', [AuthenticateController::class, 'logout']);
Route::resource('pesans', '\App\Http\Controllers\PesanController'); 
Route::get('/', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('simpanregister', 'App\Http\Controllers\AuthController@simpanregister')->name('simpanregister');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
    Route::resource('pesans', '\App\Http\Controllers\PesanController'); 
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    });



 Route::group(['middleware' => ['cek_login:pelanggan']], function () {
        Route::get('home', [BookingController::class, 'index'])->name('home');
        Route::get('pesan', [BookingController::class, 'create'])->name('pesans');
        Route::post('booking', [BookingController::class, 'buat'])->name('buat');
        Route::get('/index', [BookingController::class, 'index'])->name('home');
        Route::get('home', [BookingController::class, 'index'])->name('home');
        Route::get('tiket', [BookingController::class, 'tiket'])->name('tiket');
        // Route::get('events', [BookingController::class, 'events'])->name('events');
        Route::get('team',[BookingController::class,'team'])->name('team');
        Route::get('events', [DashboardController::class,'show']);
    });
});

