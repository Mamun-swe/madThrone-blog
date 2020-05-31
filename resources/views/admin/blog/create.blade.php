@extends('layouts.app')

@section('content')
<div class="posts-create">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body p-4">
                        @if(Session::has('success'))
                            <p class="text-success">{{Session::get('success')}}</p>
                        @endif

                        <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Title -->
                            <div class="form-group mb-3">
                                @if($errors->has('blog_title'))
                                <label class="text-danger">Blog Title required .</label>
                                @else 
                                <label>Blog Title</label>
                                @endif
                                
                                <input type="text" name="blog_title" class="form-control rounded-0 shadow-none" placeholder="Write blog title">
                            </div>

                            <!-- Content -->
                            <div class="form-group mb-3">
                                @if($errors->has('blog_content'))
                                <label class="text-danger">Blog content required .</label>
                                @else 
                                <label>Blog Content</label>
                                @endif

                                <textarea class="form-control" id="summary-ckeditor" name="blog_content"></textarea>
                            </div>

                            <!-- Image -->
                            <div class="form-group mb-3">
                                @if($errors->has('blog_image'))
                                <label class="text-danger">Image required .</label>
                                @else 
                                <label>Image</label>
                                @endif
                                <br>
                                <input type="file" name="blog_image">
                            </div>

                            <button type="submit" class="btn btn-info shadow-none text-white btn-block">Create Post</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection