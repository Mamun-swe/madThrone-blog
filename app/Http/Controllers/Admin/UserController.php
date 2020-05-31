<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $this->validate($request, $rules);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'writter',
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()->with('success', 'Successfully account created.');
    }
}
