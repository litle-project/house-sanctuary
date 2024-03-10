<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        try {
            if (!$request->cookie('token')) throw new \Exception("Token expired", 1);

            return $next($request);
        } catch (\Exception $e) {
            return redirect('dashboard/login')
                ->withInput()
                ->withErrors($e->getMessage());
        }
    }
}
