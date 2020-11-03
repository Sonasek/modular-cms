<?php

namespace Modular\Admin\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

/**
 * Class IsLoggedAsAdminMiddleware
 *
 * @package \Modular\Admin\Http\Middleware
 */
class IsLoggedAsAdminMiddleware
{
    /**
     * Pokud uživatel není přihlášen je z jakékoliv routy v
     * group 'admin' přesměrován na přihlašovací obrazovku.
     *
     * @param          $request
     * @param \Closure $next
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle($request, Closure $next)
    {
        if(false == Auth::check()){
            return view('modular-admin::login');
        }

        return $next($request);
    }
}
