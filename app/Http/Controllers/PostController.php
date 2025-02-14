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

        $posts = Post::paginate(9);
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
}


