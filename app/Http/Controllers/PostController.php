<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:manage posts', ['only' => ['create', 'store', 'show', 'edit' . 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();

        return view('backend.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = PostCategory::all();

        return view('backend.posts.create', compact('categories'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
            'author' => 'required',
        ]);

        $image1 = "";
        
        if ($request->file('image1')->isValid()) {
            //
            $image1 = $this->upload($request->image1);
        }

        Post::create([
            'topic' => $request->title,
            'post_category_id' => $request->category,
            'image1'  => $image1,
            'body' => $request->body,
            'author' => $request->author,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = PostCategory::all();
        return view('backend.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        //dd($request->toArray());
        $this->validate($request, [
            'title' => 'string',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'string',
            'author' => 'string',
        ]);

        $image1 = null;

        if (isset($request->image1)) {

            if ($request->file('image1')->isValid()) {
                //
                $image1 = $this->upload($request->image1);
            }
        }

        $post->update([
            'topic' => $request->title,
            'post_category_id' => $request->category,
            'image1' => isset($image1) ? $image1 : $post->image1,
            'body' => $request->body,
            'author' => $request->author,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();

        return back()->with('success', 'Post Deleted Successfully');
    }

    public function upload($file)
    {

        //$extension = $request->avatar->extension();
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/posts', $file_name);

        return $path;
    }
}
