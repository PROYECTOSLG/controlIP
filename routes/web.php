<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NetworkController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Ruta fija para la vista de la tabla
Route::get('/networks', [NetworkController::class, 'index'])->name('networks.index')->middleware('auth');
Route::post('/network/update', [NetworkController::class, 'update'])->name('network.update');
Route::post('/set-network', [NetworkController::class, 'setNetwork'])->name('networks.setNetwork')->middleware('auth');
Route::post('/set-ip/{id}', [NetworkController::class, 'setIp'])->name('networks.setIp');
Route::get('/network/details/{id}', [NetworkController::class, 'show'])->name('networks.show')->middleware('auth');


