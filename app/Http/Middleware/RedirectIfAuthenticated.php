<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $user = Auth::user();

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && $user->isAdmin()) {
                return redirect('admin/dashboard');
            } elseif(Auth::guard($guard)->check() && $user->isEditor()){
                return redirect('editor/dashboard');
            } elseif(Auth::guard($guard)->check() && $user->isAuthor()){
                return redirect('author/dashboard');
            } elseif(Auth::guard($guard)->check() && $user->isUser()) {
                return redirect('user/dashboard');
            }
        }

        return $next($request);
    }
}
