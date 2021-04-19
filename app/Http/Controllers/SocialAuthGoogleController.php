<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialGoogleAccountService;

class SocialAuthGoogleController extends Controller
{
    //
    /**
   * Create a redirect method to google api.
   *
   * @return void
   */
  public function redirect()
  {
      return Socialite::driver('google')->redirect();
  }
/**
   * Return a callback method from google api.
   *
   * @return callback URL from google
   */
  public function callback(SocialGoogleAccountService $service)
  {
    try 
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        $user->assignRole('Level 4');
        auth()->login($user);
        
        return redirect()->to('/home');
    
    } catch (\Exception $e) {
        return redirect('/login');
    }
  }
}