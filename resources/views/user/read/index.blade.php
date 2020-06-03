@extends('layouts.website')
@section('content')

<div class="read-blog py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-4">

                @if($blog)
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <h4 class="mb-4 mt-4"><b>{{$blog->blog_title}}</b></h4>
                            <img src="{{url('')}}/assets/images/blog/{{$blog->blog_image}}" class="img-fluid mb-3">

                            <div class="d-sm-flex mb-4 blogger-info pt-3">
                                
                                <!-- <div class="profile-img-box rounded-circle">
                                    <img src="{{url('')}}/assets/images/users/{{$blog->profile_img}}" class="img-fluid">
                                </div> -->
                                <div class="pt-2">
                                    <p class="text-capitalize mb-0">{{$blog->name}}</p>
                                    <!-- <p class="mb-0">
                                        <span class="text-capitalize">{{$blog->work_position}}</span>
                                        at
                                        <span class="text-capitalize"><b>{{$blog->company_name}}</b></span>
                                    </p> -->
                                    <small>Posted on {{date('d M Y | H:i A', strtotime($blog->created_at))}}</small>
                                </div>
                                
                            </div>

                            <div class="blog-content">
                                {!!$blog->blog_content!!}
                            </div>
                            
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>



@endsection