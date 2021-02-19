<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class BlogController extends Controller
{

    public function addBlog()
    {
        // Blog::create($request->all());
        $p = new Blog;
        $p -> title = request('Title');
        $p -> body = request('Editor');
        $p -> author = request('Author');
        $p -> seo_title = request('SEO-Title');
        $p -> seo_description = request('SEO-Description');
        $p -> slug = str_slug(request('Title'), '-');
        $p -> is_published = request('status-option');

        $p -> save();
        return view('index');
    }


}
