<?php

use App\Http\Controllers\admin\AcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\admin\TransaksiController;
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
Route::get('/', [BookingController::class, 'index'])->name('home');
Route::get('home', [BookingController::class, 'index'])->name('home');
Route::get('auth',[AuthController::class, 'login'])->name('auth.index');
Route::prefix('')->name('auth.')->group(function(){
    Route::get('register',[AuthController::class, 'register'])->name('register');
    Route::post('login',[AuthController::class, 'do_login'])->name('do_login');
    Route::post('register',[AuthController::class, 'do_register'])->name('do_register');
});


Route::middleware(['auth:web'])->group(function(){
    // Route::redirect('/', 'Home', 301);
    Route::get('Home', [BookingController::class, 'index'])->name('home');
    Route::post('logout',[AuthController::class, 'do_logout'])->name('logout');
});


// Route::get('/', [BookingController::class, 'index']);
// Route::post('/booking', [BookingController::class, 'store']);


Route::prefix('mahasiswa')->group(function(){
    Route::get('index', [TransaksiController::class, 'index']);
    // Route::get('/tiket', BookingController::class, 'tiket');
    Route::get('/events', [BookingController::class, 'events']);
    Route::get('team',[BookingController::class,'team']);
});


// Route::get('/tiket',[BookingController::class,'ticket'])->name('tiket');
// // Route::get('/tiketadmin',[IndexController::class,'tiketadmin'])->name('tiketadmin');
// // Route::get('/notifkopi',[IndexController::class,'notifkopi'])->name('notifkopi');
// Route::get('/events',[BookingControllerController::class,'events'])->name('events');
// // Route::get('/eventsadmin',[IndexController::class,'eventsadmin'])->name('eventsadmin');
// Route::get('/team',[BookingController::class,'team'])->name('team');



Route::prefix('admin')->group(function(){
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('acara', AcaraController::class);
    
    
});

