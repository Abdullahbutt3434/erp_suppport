<?php

namespace App\Interfaces\Http\Controllers\User\Authorization;

use App\Interfaces\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class AuthorizationController extends Controller
{

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function attemptLogin(Request $request){

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard')->with('message','You have Successfully logged in');
        }
        return redirect()->back()->with('message','Something went wrong');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function login(Request $request){
        return view('user.authorization.login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request){
        Session::flush();
        Auth::logout();

        return Redirect()->route('user.login');
    }
}
