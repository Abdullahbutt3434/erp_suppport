<?php

namespace App\Interfaces\Http\Controllers\User;

use App\Interfaces\Http\Controllers\Controller;

/**
 *
 */
class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

}
