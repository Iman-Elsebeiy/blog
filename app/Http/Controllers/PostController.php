<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use App\Traits\Common;


class PostController extends Controller
{
    // use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(6);
        return view('posts.posts',compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post= Post::findOrFail($id);
        return view("posts.details", compact("post"));
    }


    function destroy($id){
        $Post = Post::findOrFail($id);
        $Post->delete();
        return redirect()->route('posts.index');

    }



    public function create(){
        return view('posts.add_post');
    }


    public function store(){

        request()->validate([
            "title" => ["required", "min:3", "max:255"],
            "description" => ["required", "min:20", "max:255"],
            "image" => ["required", "image", "mimes:jpeg,png,jpg"]

         ]);

        $post = new Post();
        $post->title = request()->title;
        $post->description = request()->description;
        $post->image = request('image');
        $post->save();
        return redirect()->route('posts.index');



    }
}


