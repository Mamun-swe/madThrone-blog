@extends('layouts.app')

@section('content')
<div class="posts-create">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body p-4">

                        <form action="" method="post">
                            @csrf

                            <!-- Title -->
                            <div class="form-group mb-3">
                                <label>Post Title</label>
                                <input type="text" name="post_title" class="form-control rounded-0 shadow-none" placeholder="Write post title">
                            </div>

                            <div class="form-group mb-3">
                            <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection