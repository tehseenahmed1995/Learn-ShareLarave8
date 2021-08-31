<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }
    
    public function getAllPosts()
    {
        $result = DB::table('posts')->get();
        return view('post', ['posts' => $result]);

    }

    public function createPost()
    {
        
    }
}
