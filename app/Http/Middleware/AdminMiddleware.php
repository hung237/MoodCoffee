<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    protected $routeMiddleware = [
        // ...
        'checkAdminSession' => \App\Http\Middleware\AdminMiddleware::class,
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra session 'loginAdmin'
        if (!session()->has('loginAdmin') || session('loginAdmin') == false) {
            return redirect('/login'); // Chuyển hướng về trang đăng nhập nếu session không hợp lệ
        }

        return $next($request);
    }
}
