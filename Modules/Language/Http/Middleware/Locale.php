<?php

namespace Modules\Language\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App;
class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = Session::get('language', config('app.locale'));
        App::setLocale($language);
        return $next($request);
    }
}
