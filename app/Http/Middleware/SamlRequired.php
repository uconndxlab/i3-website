<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use OneLogin\Saml2\Auth as SamlAuth;
use App\Models\SamlUser;

class SamlRequired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( Auth::check() ) {
            $expire = $request->session()->get('samlExpire');
            if ( $expire && $expire > time() ) {
                // Auth facade should already have the user at this point and we can continue.
                return $next($request);
            }
        }

        // If something isn't valid, expire the session and redirect to the login page.
        $request->session()->forget('samlExpire');
        $auth = new SamlAuth(config('saml'));
        $redirect_url = $auth->login(null, [], false, false, true);
        $request->session()->put('requestId', $auth->getLastRequestID());
        return redirect($redirect_url);
    }
}
