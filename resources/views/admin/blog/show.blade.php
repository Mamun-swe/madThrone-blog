@extends('layouts.app')

@section('content')
<div class="blog-show">
    <div class="container">
        <div class="row">

            @if($blog)
            <div class="col-12">
                <h2 class="mb-3"><b>{{$blog->blog_title}}</b></h2>
                <img src="{{url('')}}/assets/images/blog/{{$blog->blog_image}}" class="img-fluid mb-3">
                <br>
                <small class="mb-0">
                    Posted on {{date('d M Y | H:i A', strtotime($blog->created_at))}}
                </small>
                {!!$blog->blog_content!!}
            </div>
            @else
               <h5 class="text-danger">Opps Blog Not found !!</h5>
            @endif
        </div>
    </div>
</div>
@endsection