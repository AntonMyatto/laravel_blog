<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
    public function blog(){
        $posts = Post::all();
        return view('welcome')->with('posts', $posts);
    }

    public function blogPost($url){
        $post = Post::all()->where('slug',$url)->first();
        return view('post.index')->with('post', $post);
    }
}
