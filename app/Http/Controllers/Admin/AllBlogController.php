<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllBlogController extends Controller
{
    public function index(){
        $blogs = Blog::join('users', 'users.id', '=', 'blogs.user_id')
            ->select('users.name', 'blogs.id', 'blogs.blog_title')
            ->orderBy('blogs.id', 'DESC')
            ->paginate(20);
        return view('admin.all-blog.index', compact('blogs'));
    }

    public function show($id){
        $blog = Blog::find($id);
        return view('admin.all-blog.show', compact('blog'));
    }

    public function destroy($id){
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}
