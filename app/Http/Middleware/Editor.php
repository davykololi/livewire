<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Editor
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

        if ($check && $user->isAuthor()) {
            return redirect('author/dashboard');
        }

        if ($check && $user->isVisitor()) {
            return redirect('/');
        }

        if ($check && $user->isEditor()) {
            return $next($request);
        }

        abort(404); // For other user throw 404 error
    }
}
