<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($slug) 
    {
        // $post = \DB::table('post')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();
    
        return view('test', [
            "post" => $post
        ]);
    }
}
