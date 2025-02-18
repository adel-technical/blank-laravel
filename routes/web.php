<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=> false]);

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('users.index');
//     Route::get('/create', [UserController::class, 'create'])->name('users.create');  
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');  
//     Route::get('/users', [UserController::class, 'store'])->name('users.store');  
// });
Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
});