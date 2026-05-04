<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. ពិនិត្យថាអ្នកប្រើបានចូលហើយឬនៅ
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'សូមចូលគណនីជាមុនសិន។');
        }

        // 2. ពិនិត្យ Role
        $user = Auth::user();
        
        if ($user->role !== 'admin') {
            abort(403, 'អ្នកមិនមានសិទ្ធិចូលប្រើទំព័រនេះទេ។');
        }

        // 3. បើគ្រប់លក្ខខណ្ឌត្រូវ → បន្តទៅ
        return $next($request);
    }
}