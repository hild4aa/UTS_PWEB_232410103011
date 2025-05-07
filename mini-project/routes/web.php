<?php

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


use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'login'])->name('login');
// Route::post('/', [PageController::class, 'authenticated'])->name('auth');
// Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
// Route::get('/profile', [PageController::class, 'profile'])->name('profile');
// Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');


Route::get('/', [PageController::class, 'login'])->name('login');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
