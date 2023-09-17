<?php

namespace App\Application\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && !Auth::user()->isActive()) {
            Auth::logout(); // Logout the user
            return redirect()->route('user.login')
                ->with('error', 'Your account is not active. Please contact support.');
        }

        return $next($request);
    }
}
