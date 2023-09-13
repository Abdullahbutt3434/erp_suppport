<?php

use App\Domain\User\Enum\UserRoles;
use App\Interfaces\Http\Controllers\User\Authorization\AuthorizationController;
use App\Interfaces\Http\Controllers\User\DashboardController;
use App\Interfaces\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user', static function () {
    return view('user.index');
});
Route::get('/login', [AuthorizationController::class, 'login'])->name('user.login');
Route::post('/login', [AuthorizationController::class, 'attemptLogin'])->name('user.attemptLogin');
Route::get('/logout', [AuthorizationController::class, 'logout'])->name('user.logout');

Route::as('user.')->prefix('users')->group(function () {
    Route::middleware(['auth'])->group( static function (){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/list',[UserController::class,'index'])->name('index');
        Route::get('/create',[UserController::class,'create'])->name('create');
    });
});
