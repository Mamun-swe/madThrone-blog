<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $data = Profile::where('user_id', '=', Auth()->User()->id)->first();
        return view('admin.profile.index', compact('data'));
    }

    public function edit(){
        $data = Profile::where('user_id', '=', Auth()->User()->id)->first();
        return view('admin.profile.edit', compact('data'));
    }

    public function update(Request $request){
        $rules = [
            'edu_dept' => 'required',
            'edu_school' => 'required',
            'company_name' => 'required',
            'work_position' => 'required',
            'profile_img' => 'required'
        ];
        $this->validate($request,$rules);
        $me = Profile::where('user_id', '=', Auth()->User()->id)->first();
        if($me){
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/images/users', $filename);
    
            $record = Profile::where('user_id', '=', Auth()->User()->id);
            $record->update([
                'edu_dept' => $request['edu_dept'],
                'edu_school' => $request['edu_school'],
                'company_name' => $request['company_name'],
                'work_position' => $request['work_position'],
                'profile_img' => $filename,
            ]);
            return redirect()->back()->with('success', 'Successfully Profile Updated.');
            
        }else{
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/images/users', $filename);
    
            Profile::create([
                'user_id' => Auth()->User()->id,
                'edu_dept' => $request['edu_dept'],
                'edu_school' => $request['edu_school'],
                'company_name' => $request['company_name'],
                'work_position' => $request['work_position'],
                'profile_img' => $filename,
            ]);

            return redirect()->back()->with('success', 'Successfully Profile Updated.');
        }
    }
}
