<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('events', EventsController::class)->middleware('auth');
Route::resource('ticket', \App\Http\Controllers\TicketController::class)->middleware('auth');;
Route::get('/events/{event_id}/ticket', [EventsController::class, 'detail'])->name('events.ticket')->middleware('auth');;
Route::post('ticket/booked/{serial_key}', [\App\Http\Controllers\TicketController::class, 'book'])->name('ticket.booked')->middleware('auth');;
