<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderby('created_at', 'desc')->orderby('id','desc')->paginate(5);
        return view('index', ['posts' => $posts]);
    }

    /**
     * View a post entry
     * 
     * @param Post $post
     * @return void
     */
    public function single(Post $post)
    {   
        return view('single', ['post' => $post]); 
    }

    /**
     * Loads the archive page
     * 
     * @return void
     */
    public function archive() {
        $list =  Post::orderby('created_at', 'desc')->orderby('id','desc')->paginate(5)->toJson();
        return view('archive', ['list'=> json_decode($list)]);
    }
}
