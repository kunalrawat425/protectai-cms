<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function index()
    {
        $blogs = Blog::all();
        return view('welcome')->with('blogs', $blogs);
    }
    public function getBlog($id)
    {
        $blogs = DB::select('select * from blogs where id = ?',[$id]);
        return view('blog',['blogs'=>$blogs]);
    }
    public function allBlogs()
    {
        // $blogs = DB::select("select * from blogs ");
        $blogs = DB::select("select * from blogs where is_published='publish'");
        return view('all-blogs-display',['blogs'=>$blogs]);
    }
}
