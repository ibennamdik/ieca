<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Controllers\Backend\HomeController;
use App\Product;
use App\Rim;
use App\Speed;
use App\TyreProfile;
use App\Width;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $all_products = Product::with('category', 'width', 'brand')->get();

        return view('backend.products.index', compact('all_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $widths = Width::all();
        $speed = Speed::all();
        $rims = Rim::all();
        $brands = Brand::all();
        $profiles = TyreProfile::all();
        $categories = Category::all();
        //dd($profiles);

        return view('backend.products.create', compact('widths', 'speed', 'rims', 'brands', 'profiles', 'categories'));
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
        ///dd($request->toArray());
        $this->validate($request, [
            'name' => 'required|string',
            'category' => 'required',
            'brand'  => 'required',
            'description'  => 'string|max:225',
            //'rating' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric',
            'price'  => 'required|numeric',
            'width' => 'required',
            'profile' => 'required',
            'rim' => 'required',
            //'speed' => 'required'
        ]);

        $image1 = "";
        //$image2 = "";

        if ($request->file('image1')->isValid()) {
            //
            $image1 = $this->upload($request->image1);
        }

        // if ($request->file('image2')->isValid()) {
        //     //
        //     $image2 = $this->upload($request->image2);
        // }


        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'description' => $request->description,
            'rating' => 0,
            'image1' => $image1,
            //'image2' => $image2,
            'quantity' => $request->quantity,
            'amount' => $request->price,
            'width_id' => $request->width,
            'tyre_profile_id' => $request->profile,
            'rim_id' => $request->rim,
        ]);

        //log activity
        try {

            activity()
            ->performedOn($product)
            ->causedBy(auth()->user())
            ->withProperties([
                'productName' => $product->name,
                'quantity' => $product->quantity,
                'price' => $product->price
                ])
            ->log('A Product Was added by :causer.name { Name- :properties.productName, Quantity- :properties.quantity, price- :properties.price');

        } catch (\Exception $e) {
            error_log($e->getMessage());
        }


        return redirect()->route('admin.products.index')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $widths = Width::all();
        $speed = Speed::all();
        $rims = Rim::all();
        $brands = Brand::all();
        $profiles = TyreProfile::all();
        $categories = Category::all();

        return view('backend.products.edit', compact('product', 'widths', 'speed', 'rims', 'brands', 'profiles', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->validate($request, [
            'name' => 'string',
            'description'  => 'string|max:225',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'numeric',
            'price'  => 'numeric',
        ]);


        $image1 = null;
       // $image2 = null;


        if(isset($request->image1)) {

            if ($request->file('image1')->isValid()) {
                //
                $image1 = $this->upload($request->image1);
            }

        }

        // if(isset($request->image2)) {

        //     if ($request->file('image2')->isValid()) {
        //         //
        //         $image2 = $this->upload($request->image2);
        //     }
        // }

        $product->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'description' => $request->description,
            'rating' => 0,
            'image1' => isset($image1) ? $image1 : $product->image1,
            //'image2' => isset($image2) ? $image2 : $product->image2,
            'quantity' => $request->quantity,
            'amount' => $request->price,
            'width_id' => $request->width,
            'tyre_profile_id' => $request->profile,
            'rim_id' => $request->rim,
        ]);

        try {

            activity()
            ->performedOn($product)
            ->causedBy(auth()->user())
            ->withProperties([
                'productName' => $product->name,
                'quantity' => $product->quantity,
                'price' => $product->price
                ])
            ->log('A Product was updated by :causer.name { Name- :properties.productName, Quantity- :properties.quantity, price- :properties.price');

        } catch (\Exception $e) {
            error_log($e->getMessage());
        }

        return redirect()->route('admin.products.index')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        try {

            activity()
            ->performedOn($product)
            ->causedBy(auth()->user())
            ->withProperties([
                'productName' => $product->name,
                'quantity' => $product->quantity,
                'price' => $product->price
                ])
            ->log('A Product Was deleted by :causer.name { Name- :properties.productName, Quantity- :properties.quantity, price- :properties.price');

        } catch (\Exception $e) {
            error_log($e->getMessage());
        }

        $product->delete();

        return back()->with('success', 'Product Deleted Successfully');
    }

    public function upload($file){

        //$extension = $request->avatar->extension();
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/products', $file_name);

        return $path;

    }

    public function toggleProduct(Product $product){


        if ($product->visibility) {
            $product->update([
                'visibility' => false
            ]);
            return back()->with('success', 'Product Disabled Successfully');
        } else {
            $product->update([
                'visibility' => true
            ]);
            return back()->with('success', 'Product Enable Successfully');
        }
    }
}
