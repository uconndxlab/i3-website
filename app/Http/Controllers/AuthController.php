<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OneLogin\Saml2\Auth as SamlAuth;
use App\Models\SamlUser;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function saml_login(Request $request) {
        $auth = new SamlAuth(config('saml'));
        $redirectUrl = $auth->login(null, [], false, false, true);
        $request->session()->put('requestId', $auth->getLastRequestID());
        return redirect($redirectUrl);
    }

    public function saml_acs(Request $request) {
        $auth = new SamlAuth(config('saml'));
        $auth->processResponse($request->get('requestId'));

        if (count($auth->getErrors()) > 0 || !$auth->isAuthenticated()) {
            return 'An error occurred processing SAML response';
        }

        // Assume we have a valid saml user now, let's sync a user.
        $saml_user_attributes = $auth->getAttributesWithFriendlyName();
        $saml_user = SamlUser::firstOrNew(['netid' => $auth->getNameId()]);
        $saml_user->first_name = $saml_user_attributes['FirstName'][0];
        $saml_user->full_name = $saml_user_attributes['FirstName'][0] . ' ' . $saml_user_attributes['LastName'][0];
        $saml_user->email = $saml_user_attributes['Email'][0];
        $saml_user->affiliation = $saml_user_attributes['eduPersonPrimaryAffiliation'][0] ?? null;
        $saml_user->save();

        $request->session()->put('samlExpire', $auth->getSessionExpiration());

        $relay = $request->input('RelayState');

        Auth::login($saml_user);

        if ($relay) {
            return redirect($relay);
        }

        return redirect()->route('home');
    }

    public function saml_logout(Request $request) {
        $auth = new SamlAuth(config('saml'));
        $auth->logout();
    }

    public function saml_logout_redirect(Request $request) {
        $auth = new SamlAuth(config('saml'));
        $auth->processSLO();
        $request->session()->forget('samlExpire');
        Auth::logout();
        return redirect()->route('home');
    }
}
