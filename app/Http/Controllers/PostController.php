<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        //get() get all 
        $posts = Post::paginate(6); //paginate takes in the argument, how many do you want to display per page..then on the view file under your foreach enter what your looping through then links() to automatically put tailwind paginate on the ui. {{ $posts->links() }}
       

        return view('posts.index', [
            'posts' => $posts, // after you get posts from db pass down to the view so you can loop through them & display on the UI under resources/views/posts
            
        ]);
    }


    public function store(Request $request){
      $this->validate($request, [
          'body' => 'required'
      ]);

      $request->user()->posts()->create([
          'body' => $request->body
      ]);

      return back();
    }
}
