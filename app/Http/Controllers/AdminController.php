<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the blog post on admin
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderby('created_at', 'desc')->orderby('id','desc')->paginate(5);
        return view('admin/list', ['posts' => $posts]);
    }

    /**
     * Loads the create blog post page
     * 
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('admin/post', ['post' => false]);
    }

    /**
     * Creates the blog post entry
     * 
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
            return redirect()->back()->with('message', 'Error');
        }
        $post =  Post::create($request->except('photo'));
        $post = $this->save_image($request, $post);

        $response = $post;
        return redirect()->route('admin-list');
    }

    /**
     * Loads the edit blog post page
     * 
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin/post', ['post' => $post]);
    }

    /**
     * Update blog post eentry
     * 
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // validate
        if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
            return redirect()->back()->with('message', 'Error');
        }
        $post->update($request->except('photo'));

        // do we have an image to process?
        if($request->image){
            $post = $this->save_image($request, $post);
        }
        return redirect()->route('admin-list');
    }

    /**
     * Stores the added image to the public/blog folder
     * 
     * @param Request $request
     * @param Post $post
     * @return Post $post
     */
    private function save_image($request, $post)
    {
         // do we have an image to process?
         if($request->image){
            $filename = substr( md5( $post->id . '-' . time() ), 0, 15) . '.' . $request->file('image')->getClientOriginalExtension();
            $path = public_path('blog/' . $filename);
            \Image::make($request->image)->orientate()->fit(500)->save($path);

            // now update the photo column on the post record
            $post->photo = 'blog/' . $filename;
            $post->save();
        }

        return $post;
    }
}
