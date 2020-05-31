@extends('layouts.app')

@section('content')
<div class="posts-index">
    <div class="container">
        <!-- Posts -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex bg-white p-2">
                    <div><h5 class="mb-0 mt-2">Your Posts</h5></div>
                    <div class="ml-auto">
                        <a href="{{route('admin.blog.create')}}" class="btn btn-info rounded-0 shadow-none btn-light">
                            <img src="{{asset('assets/images/static/plus.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">

            @foreach($data as $blog)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card rounded-0 border-0 post-card shadow-sm">

                    <img src="{{url('')}}/assets/images/blog/{{$blog->blog_image}}" class="card-img rounded-0">

                    <div class="card-body">
                        <h5 class="mb-3">
                        {{ \Illuminate\Support\Str::words($blog->blog_title, 4, '...') }}
                        </h5>
                        {!!\Illuminate\Support\Str::words($blog->blog_content, 14, '...') !!}
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <a href="{{route('admin.blog.show',$blog->id)}}" class="btn btn-block rounded-0 shadow-none btn-light">
                                    <img src="{{asset('assets/images/static/eye.png')}}">
                                </a>
                            </div>
                            <div class="flex-fill">
                                <a href="{{route('admin.blog.edit',$blog->id)}}" class="btn btn-block rounded-0 shadow-none btn-light">
                                    <img src="{{asset('assets/images/static/edit.png')}}">
                                </a>
                            </div>
                            <div class="flex-fill">
                                <form action="{{route('admin.blog.destroy',$blog->id)}}" method="post"
                                    onsubmit="return confirm('Are you sure ?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-block rounded-0 shadow-none btn-light">
                                        <img src="{{asset('assets/images/static/delete.png')}}">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12">
            {{ $data->links() }}
            </div>


        </div>
        <!-- End Posts -->
    </div>
</div>
@endsection