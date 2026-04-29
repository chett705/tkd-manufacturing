<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('is_admin') === true) {
            return $next($request);
        }

        // បើមិនទាន់ចូល → ត្រឡប់ទៅ Login Page
        return redirect()->route('login')
                         ->with('error', 'សូមចូលគណនីជាមុនដើម្បីចូលប្រើ Admin Panel។');
    }
}
