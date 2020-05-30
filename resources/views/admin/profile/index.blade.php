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
                                    <img src="{{asset('assets/images/static/user.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                            <div class="ml-lg-4 mt-4 mt-lg-0">
                                <h5 class="text-capitalize">abdullah al mamun</h5>
                                <p class="text-capitalize mb-0">B.sc in Software Engineering</p>
                                <p class="text-capitalize mb-0">daffodil international university</p>
                                <p class="text-capitalize mb-2">Software Engineer at DhakaBass</p>
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