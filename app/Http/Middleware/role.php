<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $jabatan = Auth::user()->role->name;
        if (is_array($roles)) {
            foreach ($roles as $key => $role) {
                if ($jabatan === $role) {
                    return $next($request);
                }
            }
        }
        if ($roles === $jabatan) {
            return $next($request);
        }
        Flash::error('Anda tidak memiliki akses ke halaman tersebut!');
        return redirect()->back();
    }
}