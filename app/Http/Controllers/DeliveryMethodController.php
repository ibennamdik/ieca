<?php

namespace App\Http\Controllers;

use App\DeliveryMethod;
use Illuminate\Http\Request;

class DeliveryMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage delivery methods', ['only' => ['create', 'store', 'show', 'edit'. 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cost'  => 'required|numeric',
        ]);

        $image = "";
        if ($request->file('image')->isValid()) {
            $image = $this->upload($request->image);
        }

        DeliveryMethod::create([
            'name' => $request->name,
            'image' => $image,
            'cost' => $request->cost,
        ]);

        return back()->with('success', 'Delivery method added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryMethod $deliveryMethod)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cost'  => 'required|numeric',
        ]);

        $image = "";
        $image = $this->upload($request->image);

        // dd($request->toArray());
        $deliveryMethod->update([
            'name' => $request->name,
            'image' => $image,
            'cost' => $request->cost,
        ]);

        return back()->with('success', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryMethod  $deliveryMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMethod $deliveryMethod)
    {
        //
        $deliveryMethod->delete();

        return back()->with('success', 'Delivery method deleted successfully');
    }

    public function upload($file){

        //$extension = $request->avatar->extension();
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/delivery', $file_name);

        return $path;

    }
}
