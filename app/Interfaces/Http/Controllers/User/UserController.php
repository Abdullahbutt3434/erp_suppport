<?php

namespace App\Interfaces\Http\Controllers\User;

use App\Domain\User\Entities\Authorization\Role;
use App\Domain\User\Entities\User;
use App\Domain\User\Enum\UserStatus;
use App\Interfaces\Http\Controllers\Controller;
use App\Interfaces\Http\Requests\User\UserCreateRequest;
use App\Interfaces\Http\Requests\User\UserUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

/**
 *
 */
class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('user.index')
            ->with('users', User::with('roles')->paginate(10));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('user.create')->with('roles', Role::all());
    }

    /**
     * @param UserCreateRequest $request
     * @return RedirectResponse
     */
    public function store(UserCreateRequest $request): RedirectResponse
    {
        $key = "error";
        $message = "User has not successfully added";
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "password" => Hash::make($request->password),
        ]);
        if ($role = Role::find($request->role)) {
            $user->assignRole($role);
            $key = "success";
            $message = "User added successfully added";
        }

        return redirect()->route('user.index')->with($key, $message);
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('user.edit')
            ->with('roles', Role::all())
            ->with('status', UserStatus::values())
            ->with('user', $user->load('roles'));
    }

    /**
     * @param UserUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        $key = "error";
        $message = "User was not successfully updated";

        if (isset($request->password)) {
            $request->password = Hash::make($request->password);
        } else {
            $request->request->remove('password');
        }
        if ($user->update($request->all())) {
            $key = "success";
            $message = "User is successfully updated";
        }
        if(isset($request->role)){
            $user->removeRole($user->roles->first());
            $role = Role::find($request->role);
            $user->assignRole($role);
        }
        return redirect()->route('user.index')->with($key, $message);
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $key = "error";
        $message = "User was not successfully deleted";
        if($user->delete()){
            $key = "success";
            $message = "User is successfully deleted";
        }
        return redirect()->route('user.index')->with($key, $message);
    }
}
