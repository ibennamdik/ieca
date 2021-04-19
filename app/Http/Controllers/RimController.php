<?php

namespace App\Http\Controllers;

use App\Rim;
use Illuminate\Http\Request;

class RimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage products', ['only' => ['create', 'store', 'show', 'edit'. 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $values = Rim::all();

        return view('backend.settings.rim', compact('values'));
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
        Rim::create($request->all());

        return back()->with('success', 'Successful!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rim  $rim
     * @return \Illuminate\Http\Response
     */
    public function show(Rim $rim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rim  $rim
     * @return \Illuminate\Http\Response
     */
    public function edit(Rim $rim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rim  $rim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rim $rim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rim  $rim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rim $rim)
    {
        //
        try{
            $rim->delete();

            return back()->with('success', 'rim deleted successfully');
        } catch(\Exception $e)
        {
            return back()->with('failure', 'rim is attached to a product and cannot be deleted');
        }
    }
}
