<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage account', ['only' => ['overview', 'orders', 'profile', 'password', 'avatar', 'updateProfile', 'updatePassword']]);
    }

    public function overview() {
        return view('frontend.account.overview');
    }

    public function orders() {

        $orders = auth()->user()->orders;
        return view('frontend.account.order', compact('orders'));
    }

    public function profile() {
        return view('frontend.account.profile');
    }

    public function password() {
        return view('frontend.account.password');
    }

    public function avatar(Request $request){

        $avatar = null;


        if(isset($request->avatar)) {

            if ($request->file('avatar')->isValid()) {
                //
                $avatar = $this->upload($request->avatar);
            }

        }
        //dd($avatar);
        auth()->user()->profile->update([
            'avatar' => $avatar
        ]);

        return back()->with('success', 'Picture updated successfully');
    }

    public function updateProfile(Request $request)
    {
        auth()->user()->update([
            'name' => $request->name
        ]);

        auth()->user()->profile->update([
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        return back()->with('success', 'Profile updated successfully');
    }

    public function upload($file){

        //$extension = $request->avatar->extension();
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/avatars', $file_name);

        return $path;

    }

    public function updatePassword(Request $request)
    {
        //dd($request->toArray());
        $this->validate($request, [
            'old_pass' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_pass, auth()->user()->password)){
            return back()->with('failure', 'Old password does not match your previous password');
        }

        //update user's password
        auth()->user()->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'Password updated successfully');
    }
}
