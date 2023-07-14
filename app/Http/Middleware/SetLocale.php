<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $preferredLanguage = $request->getPreferredLanguage(['pt_BR', 'en']);
        if ($request->lg == 'pt') :
            $preferredLanguage = 'pt_BR';
        endif;
        if ($request->lg == 'en') :
            $preferredLanguage = 'en';
        endif;
        app()->setLocale($preferredLanguage);

        return $next($request);
    }
}
