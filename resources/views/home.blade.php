@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-4 mb-4">
                <div class="card rounded-0 shadow-sm text-center">
                    <div class="card-body py-5">
                        <h5 class="mb-2">{{$admin}}</h5>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
                <div class="card rounded-0 shadow-sm text-center">
                    <div class="card-body py-5">
                        <h5 class="mb-2">{{$writter}}</h5>
                        <p class="mb-0">Writter</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
                <div class="card rounded-0 shadow-sm text-center">
                    <div class="card-body py-5">
                        <h5 class="mb-2">{{$blog}}</h5>
                        <p class="mb-0">Blogs</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
