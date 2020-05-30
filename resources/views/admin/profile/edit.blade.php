@extends('layouts.app')

@section('content')
<div class="profile-edit">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <form action="" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Name -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control rounded-0 shadow-none" name="name">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Education Dept -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        <label>Department</label>
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_dept">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Education School -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        <label>School / College / University</label>
                                        <input type="text" class="form-control rounded-0 shadow-none" name="edu_school">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <!-- Work Company -->
                                    <div class="form-group mb-3 mb-lg-4">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control rounded-0 shadow-none" name="company_name">
                                    </div>
                                </div>
                            </div>

                
                            <!-- Work Position -->
                            <div class="form-group mb-3 mb-lg-4">
                                <label>Position</label>
                                <input type="text" class="form-control rounded-0 shadow-none" name="work_position">
                            </div>

                            <!-- Image -->
                            <div class="form-group mb-3 mb-lg-4">
                                <label>Profile Image</label>
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