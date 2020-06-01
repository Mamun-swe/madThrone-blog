<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $blogs = Blog::join('users', 'users.id', '=', 'blogs.user_id')
            ->select(
                'users.name', 
                'blogs.id', 
                'blogs.blog_title', 
                'blogs.blog_image', 
                'blogs.created_at'
            )
            ->orderBy('blogs.id', 'DESC')
            ->paginate(20);
        return view('user.welcome', compact('blogs'));
    }

    public function show($id){
        // $blog = Blog::find($id);
        $blog = Blog::join('users', 'users.id', '=', 'blogs.user_id')
            ->join('profiles', 'profiles.user_id', '=', 'blogs.user_id')
            ->select(
                'users.name', 
                'profiles.work_position',
                'profiles.company_name',
                'profiles.profile_img',
                'blogs.blog_title', 
                'blogs.blog_content', 
                'blogs.blog_image', 
                'blogs.created_at'
            )
            ->where('blogs.id', '=', $id)
            ->first();
        return view('user.read.index', compact('blog'));
    }
}
