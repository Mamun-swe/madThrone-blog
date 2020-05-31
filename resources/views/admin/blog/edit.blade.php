@extends('layouts.app')

@section('content')
<div class="blog-edit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body p-4">
                    

                        @if($blog)
                        <form action="{{route('admin.blog.update', $blog->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            <!-- Blog Title -->
                            <div class="form-group mb-3">
                                @if($errors->has('blog_title'))
                                <label class="text-danger">Blog Title required .</label>
                                @else 
                                <label>Blog Title</label>
                                @endif

                                <input type="text" name="blog_title" class="form-control rounded-0 shadow-none" value="{{$blog->blog_title}}">
                            </div>

                            <!-- Content -->
                            <div class="form-group mb-3">
                                @if($errors->has('blog_content'))
                                <label class="text-danger">Blog content required .</label>
                                @else 
                                <label>Blog Content</label>
                                @endif

                                <textarea class="form-control" id="summary-ckeditor" name="blog_content">{{$blog->blog_content}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-block shadow-none btn-info text-white">Update</button>

                        </form>

                            <img src="{{url('')}}/assets/images/blog/{{$blog->blog_image}}" class="img-fluid my-3">

                            <form action="{{route('admin.blog.image.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    
                                    @if($errors->has('blog_image'))
                                        <label class="text-danger">Image required</label>
                                    @else 
                                        <label>Change Image</label>
                                    @endif

                                    <br>
                                    <input type="file" name="blog_image">
                                </div>
                                <button type="submit" class="btn btn-block shadow-none text-white btn-info">Update</button>

                            </form>

                        @else
                            <h5 class="text-danger">Opps Blog Not found !!</h5>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection