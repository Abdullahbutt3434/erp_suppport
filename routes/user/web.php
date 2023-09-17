<?php

use App\Domain\User\Enum\UserPermission;
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
        Route::get('/list',[UserController::class,'index'])->name('index')->middleware('permission:view-user');
        Route::get('/create',[UserController::class,'create'])->name('create')->middleware('permission:create-user');
        Route::post('/store',[UserController::class,'store'])->name('store')->middleware('permission:create-user');
        Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit')->middleware('permission:edit-user');
        Route::post('/update/{user}',[UserController::class,'update'])->name('update')->middleware('permission:edit-user');
        Route::get('/delete/{user}',[UserController::class,'destroy'])->name('destroy')->middleware('permission:delete-user');
    });
});
