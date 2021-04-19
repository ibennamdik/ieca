<?php

namespace App\Http\Controllers;

use App\Speed;
use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function show(Speed $speed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function edit(Speed $speed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speed $speed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speed $speed)
    {
        //
        try{
            $speed->delete();

            return back()->with('success', 'speed deleted successfully');
        } catch(\Exception $e)
        {
            return back()->with('failure', 'speed is attached to a product and cannot be deleted');
        }
    }
}
