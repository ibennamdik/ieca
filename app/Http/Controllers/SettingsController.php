<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\DeliveryMethod;
use App\Rim;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function __construct()
    {

        $this->middleware('auth');
        $this->middleware('permission:manage settings', ['only' => ['index', 'update', 'upload']]);

    }
    //
    public function index()
    {
        $values = DeliveryMethod::all();

        return view('backend.settings.index', compact('values'));
    }

    public function update(Request $request) {

        $logo = "";
        if ($request->file('logo')->isValid()) {
            //
            $logo = $this->upload($request->logo);

        }

        Setting::find(1)->update(
            [
                'logo' => $logo,
                'address'=> $request->address,
                'phone1'=> $request->phone1,
                'phone2'=> $request->phone2,
                'email'=> $request->email,
                'web_url'=> $request->web_url,
                'facebook_url'=> $request->facebook_url,
                'instagram_url'=> $request->instagram_url,
                'twitter_url'=> $request->twitter_url,
                'youtube_url'=> $request->youtube_url,
            ]
        );
        //dd($request->toArray());

        return back()->with('success', 'Update Successful');
    }

    public function upload($file){

        //$extension = $request->avatar->extension();
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/logo', $file_name);

        return $path;

    }



}
