@extends('layouts.app')

@section('content')
<div class="all-blog">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h5 class="mb-0">All Blogs</h5>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">

                @foreach($blogs as $blog)
                <div class="d-flex p-2 bg-white border-bottom">
                    <div>
                        {{ \Illuminate\Support\Str::words($blog->blog_title, 10, '...') }}
                        <br>
                        <small class="text-muted">Written by <b class="text-capitalize">{{$blog->name}}</b></small>
                    </div>
                    
                    <div class="ml-auto pt-md-1">
                        <a href="{{route('admin.allblogs.show', $blog->id)}}" class="btn btn-light rounded-0 shadow-none">
                            <img src="{{asset('assets/images/static/eye.png')}}" class="img-fluid">
                        </a>
                    </div>
                    <div class="pt-1">
                        <form action="{{route('admin.allblogs.destroy',$blog->id)}}" method="post"
                            onsubmit="return confirm('Are you sure ?')">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-block rounded-0 shadow-none btn-light">
                                <img src="{{asset('assets/images/static/delete.png')}}">
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="col-12">
            {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection