<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::where('user_id', '=', Auth()->User()->id)->orderBy('id', 'DESC')->paginate(12);
        return view('admin.blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'blog_title' => 'required',
            'blog_content' => 'required',
            'blog_image' => 'required'
        ];
        $this->validate($request,$rules);

        $file = $request->file('blog_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('assets/images/blog', $filename);
  
        Blog::create([
            'user_id' => Auth()->User()->id,
            'blog_title' => $request['blog_title'],
            'blog_content' => $request['blog_content'],
            'blog_image' => $filename,
        ]);

        return redirect()->back()->with('success', 'Successfully blog created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'blog_title' => 'required',
            'blog_content' => 'required'
        ];
        $this->validate($request, $rules);

        $record = Blog::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success', 'Update successfully');
    }

    public function blogImageUpdate(Request $request, $id){
        $rules = [
            'blog_image' => 'required'
        ];
        $this->validate($request, $rules);

            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/images/blog', $filename);
        
            $form_data = array(
                'blog_image'=> $filename,
            );
        
            $record = Blog::find($id);
            $record->update($form_data);
            return redirect()->back()->with('success', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}
