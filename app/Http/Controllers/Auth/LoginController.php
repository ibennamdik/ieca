<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout','adminLogin');
    }

    public function adminLogin()
    {
        return view('backend.auth.login');
    }

    public function gotoLogin()
    {
        return redirect()->route('admin.login');
    }

    public function authenticated(Request $request, $user) {

        //dd($user->hasRole('Level 4'));
        if(!$user->hasRole('Level 4')) {

            return redirect()->route('admin.home');
        }
        if(session('link')){

            return redirect(session('link'));
        }

        return redirect()->route('home');

    }

    public function showLoginForm()
    {
        if (!session()->has('link')) {
            # code...
            session(['link' => url()->previous()]);
        }
        return view('auth.login');
    }

}
