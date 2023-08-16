<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RSVPController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// category routes

Route::resource('category',CategoryController::class)->middleware(['auth','verified']);

// event routes

Route::resource('event',EventController::class)->middleware(['auth','verified']);

// RSVP routes
Route::get('/rsvp/{id}',[RSVPController::class,'getResponse'])->middleware(['auth','verified'])->name('rsvp');
Route::post('/response',[RSVPController::class,'responseUser'])->middleware(['auth','verified'])->name('response');
Route::get('/rsvp-list',[RSVPController::class,'index'])->middleware(['auth','verified'])->name('rsvp.list');

require __DIR__.'/auth.php';
