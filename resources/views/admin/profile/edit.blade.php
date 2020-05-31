@extends('layouts.app')

@section('content')
<div class="profile-edit">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        @if(Session::has('success'))
                            <p class="text-success">{{Session::get('success')}}</p>
                        @endif

                        <form action="{{route('admin.profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Education Dept -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        @if($errors->has('edu_dept'))
                                        <label class="text-danger">Department is required .</label>
                                        @else 
                                        <label>Department</label>
                                        @endif

                                        @if($data)
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_dept" value="{{$data->edu_dept}}"> 
                                        @else
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_dept">
                                        @endif 
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Education School -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        
                                        @if($errors->has('edu_school'))
                                        <label class="text-danger">School / College / University is required .</label>
                                        @else 
                                        <label>School / College / University</label>
                                        @endif

                                        @if($data)
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_school" value="{{$data->edu_school}}">
                                        @else
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_school">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Work Company -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        @if($errors->has('company_name'))
                                        <label class="text-danger">Company is required .</label>
                                        @else 
                                        <label>Company</label>
                                        @endif

                                        @if($data)
                                        <input type="text" class="form-control rounded-0 shadow-none" name="company_name" value="{{$data->company_name}}">
                                        @else
                                        <input type="text" class="form-control rounded-0 shadow-none" name="company_name">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Work Position -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        @if($errors->has('work_position'))
                                        <label class="text-danger">Position is required .</label>
                                        @else 
                                        <label>Position</label>
                                        @endif

                                        @if($data)
                                        <input type="text" class="form-control rounded-0 shadow-none" name="work_position" value="{{$data->work_position}}">
                                        @else
                                        <input type="text" class="form-control rounded-0 shadow-none" name="work_position">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="form-group mb-3 mb-lg-4">
                                @if($errors->has('profile_img'))
                                <label class="text-danger">Profile image is required .</label>
                                @else 
                                <label>Profile image</label>
                                @endif
                                <br>
                                <input type="file" name="profile_img">
                            </div>

                            <button type="submit" class="btn btn-info rounded-0 shadow-none text-white btn-block">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection