<?php
   
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


public function handle($request, Closure $next)
{
    $user = Auth::user();
    if ($user->usertype == 'admin') {
        return $next($request);
    }
    return redirect()->route('home')->with('error', 'You do not have admin access.');
}
}