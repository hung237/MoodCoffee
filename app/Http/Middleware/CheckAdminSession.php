<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('loginAdmin') || session('loginAdmin') === false) {
            return redirect('/login')->with('loginError','Vui lòng đăng nhập để vào trang quản trị!'); // Chuyển hướng người dùng về trang đăng nhập
        }

        return $next($request);
    }
}
