<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\detail_sewaController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('alats', AlatController::class);
    Route::resource('penyewaans', PenyewaanController::class);
    Route::resource('detailsewas', detail_sewaController::class);
    Route::resource('pembayarans', PembayaranController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route lain yang ingin diamankan
});

// Route Login
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
