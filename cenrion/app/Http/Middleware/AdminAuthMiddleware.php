<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('admin_user')) {
            return redirect()->route('admin.login')->with('error', 'Please sign in to access the Admin Panel.');
        }

        return $next($request);
    }
}
