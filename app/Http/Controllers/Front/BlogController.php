<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.blog.index', [
            'articles' => Article::whereStatus(1)->latest()->paginate(9)
        ]);
    }

    public function show($slug) 
    {
        return view('front.blog.show', [
            'article' => Article::whereSlug($slug)->first(),
            'articles' => Article::whereStatus(1)->latest()->paginate(5)
        ]);
    }
}
