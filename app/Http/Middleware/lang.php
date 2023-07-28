<?php
// Créez un nouveau fichier de middleware appelé LanguageMiddleware.php dans le dossier app/Http/Middleware

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->has('lang')) {
            $lang = $request->input('lang');
            App::setLocale($lang);
        }

        return $next($request);
    }
}
