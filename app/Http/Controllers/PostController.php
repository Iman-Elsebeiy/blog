<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
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
        $post= Post::with('user')->findOrFail($id);
        return view("posts.details", compact("post"));
    }


    function destroy($id){
        $Post = Post::findOrFail($id);
        $Post->delete();
        return redirect()->route('posts.index');

    }


    public function create(){
        $users = User::all();
        return view('posts.add_post', compact('users'));
    }

    function store()
    {

        request()->validate([
            "title" => ["required", "min:3", "max:255"],
            "description" => ["required", "min:1", "max:10000"],
        ]);
        $post = new post();

        $post->title = request('title');
        $post->description = request('description');
        $post->image = request('image');
        $post->user_id = request('user_id');
        $post->save();
        return to_route('posts.show',$post->id);
    }

    function edit($id){
        $post = Post::findOrFail($id);
        $users = User::select('id', 'name')->get();
        // $users = User::all();
        return view('posts.edit_post',compact('post','users'));

    }
    function update($id){
        $post = Post::findOrFail($id);
          request()->validate([
            "title" => ["required", "min:3", "max:255"],
            "description" => ["required", "min:1", "max:10000"],
         ]);
            $post->title = request('title');
            $post->description = request('description');
            $post->image = request('image');
            $post->user_id = request('user_id');
            $post->update();
            return to_route('posts.show',$post->id);
    }


}


