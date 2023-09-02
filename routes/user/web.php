<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', static function () {
    return view('user.index');
});
