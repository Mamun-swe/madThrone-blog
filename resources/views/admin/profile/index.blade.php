@extends('layouts.app')

@section('content')
<div class="profile-index">
    <div class="container">
        <div class="row mb-4">

            <div class="col-12 text-center text-lg-left">
                <div class="card rounded-0 border-0">
                    <div class="card-body p-4">
                        <div class="d-lg-flex">
                            <div>
                                <div class="profile-img rounded-circle m-auto">
                                    @if($data)
                                    <img src="{{url('')}}/assets/images/users/{{$data->profile_img}}" class="img-fluid">
                                    @else
                                    <img src="{{asset('assets/images/static/user.jpg')}}" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                            <div class="ml-lg-4 mt-4 mt-lg-0">
                                <h5 class="text-capitalize">{{Auth()->User()->name}}</h5>

                                @if($data)
                                    <p class="text-capitalize mb-0">{{$data->edu_dept}}</p>
                                    <p class="mb-0">{{$data->edu_school}}</p>
                                    <p class="mb-2">{{$data->work_position}} at {{$data->company_name}}</p>
                                @endif
                                <a href="{{route('admin.profile.edit')}}" class="btn btn-info shadow-none text-white">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
</div>
@endsection