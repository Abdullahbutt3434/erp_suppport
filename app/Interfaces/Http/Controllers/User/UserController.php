<?php

namespace App\Interfaces\Http\Controllers\User;

use App\Domain\User\Entities\User;
use App\Interfaces\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 *
 */
class UserController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
//        dd(User::with('roles')->get());
        return view('user.index')->with('users',User::with('roles')->paginate(10));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('user.create');
    }

    public function store(): void
    {

    }
    public function edit(): void
    {

    }
    public function update(): void
    {

    }

}
