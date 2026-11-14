<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('urutan')->get();
        return view('blog', compact('posts'));
    }
}