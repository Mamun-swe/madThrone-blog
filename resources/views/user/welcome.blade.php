@extends('layouts.website')
@section('content')

<div class="blogs py-4">
    <div class="container-fluid">
        <div class="row">

            @foreach($blogs as $blog)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card blog-card">
                    <div class="img-box">
                        <img src="{{url('')}}/assets/images/blog/{{$blog->blog_image}}" class="card-img">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3">{{ \Illuminate\Support\Str::words($blog->blog_title, 14, '...') }}</h4>
                        <p class="mb-0 text-capitalize text-info">{{$blog->name}}</p>
                        <p class="text-capitalize text-info">
                        Posted on {{date('d M Y | H:i A', strtotime($blog->created_at))}}
                        </p>

                        <div class="read-more text-center">
                            <a href="{{route('blog.read', $blog->id)}}" class="btn btn-info text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection