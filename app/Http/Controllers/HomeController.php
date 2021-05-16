<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Post;
use App\PostCategory;
use App\Product;
use App\Rim;
use App\Speed;
use App\TyreProfile;
use App\Width;
use App\Setting;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome', 'about', 'contact', 'investment', 'lesson', 'boardDetails', 'search', 'lessonDetails', 'privacyPolicy', 'termsOfUse', 'services', 'productDetails', 'productGrid']);
        $this->middleware('permission:member dashboard', ['only' => ['dashboard']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function dashboard()
    {
        $settings = Setting::all();
        return view('frontend.landing', compact('settings'));
    }

    public function welcome()
    {
        return view('frontend.landing');
    }

    public function about()
    {
        $posts = Post::all();
        return view('frontend.about', compact('posts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function lesson()
    {
        $categories = PostCategory::all();
        $posts = Post::paginate(3);

        return view('frontend.lesson', compact('categories', 'posts'));
    }

    public function investment()
    {
        return view('frontend.investment');
    }

    public function lessonDetails($id)
    {
        $post = Post::find($id);
        $categories = PostCategory::all();
        $posts = Post::all()->random()->get();

        return view('frontend.lesson-details', compact('post', 'categories', 'posts'));
    }

    public function boardDetails()
    {
        return view('frontend.board-details');
    }










    public function comment(Request $request, Post $post) {

        $post->postComments()->create([
            'user_id' => auth()->user()->id,
            'comment' => $request->comment
        ]);
        //dd($post);
        return back()->with('success', 'Comment posted');
    }

    public function productGrid()
    {
        return view('frontend.product-grid');
    }

    public function productList()
    {
        return view('frontend.product-list');
    }

    public function search() {
        $width = Input::get('width');
        $rim = Input::get('rim');
        $profile = Input::get('profile');
        // $brand = Input::get('brand');
        //dd($rim);
        $products = collect([]);

        if(isset($width) && isset($rim) && isset($profile)) {
            $products = Product::where('width_id', '=', $width)->where('rim_id', '=', $rim)->where('tyre_profile_id', '=', $profile)->where('visibility', true)->get();
        } else {
            $products = Product::orWhere('width_id', '=', $width)->orWhere('rim_id', '=', $rim)->orWhere('tyre_profile_id', '=', $profile)->where('visibility', true)->get();
        }


        //dd($products);

        if(count($products) > 0) {
            return redirect()->back()->withDetails($products)->withQuery ( "width: ".$width." rim: ".$rim."profile: ".$profile  );
        }

        return redirect()->back()->with('failure', 'No Tyre found. Try to search again !');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function termsOfUse()
    {
        return view('frontend.terms_of_use');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function productDetails($id)
    {
        return view('frontend.product_details');
    }
}
