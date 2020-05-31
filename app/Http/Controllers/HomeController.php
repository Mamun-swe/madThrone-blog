<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = User::where('type', '=', 'admin')->count();
        $writter = User::where('type', '=', 'writter')->count();
        $blog = Blog::count();
        return view('home', compact('admin', 'writter', 'blog'));
    }
}
