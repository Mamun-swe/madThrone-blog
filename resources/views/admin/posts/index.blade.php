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
                        <a href="{{route('admin.post.create')}}" class="btn btn-info rounded-0 shadow-none btn-light">
                            <img src="{{asset('assets/images/static/plus.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card rounded-0 border-0 post-card shadow-sm">
                    <img src="{{asset('assets/images/blog/datascience.jpg')}}" class="card-img rounded-0">
                    <div class="card-body">
                        <h4 class="mb-3">Lorem ipsum, or lipsum as it is sometimes known. </h4>
                        <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <a href="" class="btn btn-block rounded-0 shadow-none btn-light"><img src="{{asset('assets/images/static/eye.png')}}"></a>
                            </div>
                            <div class="flex-fill">
                                <a href="" class="btn btn-block rounded-0 shadow-none btn-light"><img src="{{asset('assets/images/static/edit.png')}}"></a>
                            </div>
                            <div class="flex-fill">
                                <a href="" class="btn btn-block rounded-0 shadow-none btn-light"><img src="{{asset('assets/images/static/delete.png')}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Posts -->
    </div>
</div>
@endsection