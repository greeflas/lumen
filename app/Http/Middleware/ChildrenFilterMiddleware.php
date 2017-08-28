<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Children filter middleware.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class ChildrenFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('age') != 'on') {
            return redirect()->route('secret-not-allowed');
        }

        return $next($request);
    }
}
