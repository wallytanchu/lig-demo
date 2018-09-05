<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;

class PostController extends Controller
{
    /**
     * List Post
     */
    public function index()
    {
        try {
            $postlist =  Post::orderby('created_at', 'desc')->paginate(5);
            return response()->json($postlist, 200);
        } catch(\Exception $ex) {
            return response()->json(["message" => 'Error'], 200);
     }
    }
    
    /**
     * Read a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function show(Post $post)
    {   
        try {
            return response()->json($post, 200);
        } catch(\Exception $ex) {
            return response()->json(["message" => 'Error'], 200);
        }
        
    }

    /**
     * Creates a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function store(Request $request)
    {

         try {
            $statusCode = 201;
            if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
                throw "Form is empty";
            }
            $post =  Post::create($request->except('photo'));
            $post = $this->save_image($request, $post);
    
            $response = $post;
            

        } catch(\Exception $ex) {
            $statusCode = 500;
            $response = array(
                'reason' => 'Error'
            );
        }

        return response()->json($response, $statusCode);
    }

    /**
     * Updates a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function update(Request $request, Post $post)
    {   
        

        try {
            $statusCode = 200;
            if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
                throw "Form is empty";
            }
            $post->update($request->except('photo'));

            // do we have an image to process?
            if($request->image){
                $post = $this->save_image($request, $post);
            }
            $response = $post;

        } catch(\Exception $ex) {
            $statusCode = 500;
            $response = array(
                'reason' => 'Error'
            );
        }

        return response()->json($response, $statusCode);
    }

    /**
     * Removes a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function delete(Post $post)
    {

        try {
            $post->delete();
            return response()->json(null, 204);
        } catch(\Exception $ex) {
            return response()->json(["message" => 'Error'], 200);
        }
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
            Image::make($request->image)->orientate()->fit(500)->save($path);

            // now update the photo column on the post record
            $post->photo = 'blog/' . $filename;
            $post->save();
        }

        return $post;
    }
}
