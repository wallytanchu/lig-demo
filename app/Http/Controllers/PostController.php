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
        return Post::orderby('created_at', 'desc')->paginate(5);
    }
    
    /**
     * Removes a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function show(Post $post)
    {
        return $post;
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

            if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
                throw "Form is empty";
            }
            $post =  Post::create($request->except('photo'));
            $post = $this->save_image($request, $post);
    
            $response = array(
                'reason' => $post,
                'statusCode' => 201
            );
            

        } catch(\Exception $ex) {
            $response = array(
                'reason' => 'Error',
                'statusCode' => 500
            );
        }

        return response()->json($response);
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

            if(trim($request->inquiry) == null && trim($request->title) == null && !$request->image){
                throw "Form is empty";
            }
            $post->update($request->except('photo'));

            // do we have an image to process?
            if($request->image){
                $post = $this->save_image($request, $post);
            }
            $response = array(
                'reason' => $post,
                'statusCode' => 200
            );

        } catch(\Exception $ex) {
            $response = array(
                'reason' => 'Error',
                'statusCode' => 500
            );
        }

        return response()->json($post, 200);
    }

    /**
     * Removes a post entry
     * 
     * @param Post $post
     * @return 
     */
    public function delete(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
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
