<?php

namespace App\Http\Controllers;

use App\Http\Service\SocialGoogleAccountService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthGoogleController extends Controller
{
    /**
     * Create a redirect method to google api.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback(SocialGoogleAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        auth()->login($user);
//        return redirect()->to('/home');
    }


    public function getTokenfromOTP(SocialGoogleAccountService $service, Request $request)
    {
        $uri = $request->get('redirect_uri');
        $socialUser = Socialite::driver('google')
            ->redirectUrl($uri)
            ->stateless()->user();

       // return response()->json($socialUser);

        $user = $service->createOrGetUser($socialUser);
        $token = $user->createToken('Token Name')->accessToken;

        return [
            'user' => $user,
            'token' => $token
        ];

    }
}
