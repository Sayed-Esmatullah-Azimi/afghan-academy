<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $page = 'Post';
        $post = Post::all();
        return view('post.index', ['page' => $page , 'posts' => $post]);
    }
}
