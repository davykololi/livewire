<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $check = Auth::check();
        $user = Auth::user();

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if ($check && $user->isAdmin()) {
            return redirect('admin/dashboard');
        }

        if ($check && $user->isEditor()) {
            return redirect('editor/dashboard');
        }

        if ($check && $user->isUser()) {
            return redirect('user/dashboard');
        }

        if ($check && $user->isAuthor()) {
            return $next($request);
        }

        abort(404); // For other user throw 404 error
    }
}
