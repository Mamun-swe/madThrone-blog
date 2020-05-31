@extends('layouts.app')

@section('content')
<div class="user-create">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                @endif
               
                <form action="{{route('admin.users.store')}}" method="post">
                    @csrf

                    <!-- Name -->
                    <div class="form-group mb-3">
                        @if($errors->has('name'))
                            <label class="text-danger">Name is required .</label>
                        @else 
                            <label>Name</label>
                        @endif
                        <input type="text" name="name" class="form-control rounded-0 shadow-none" plceholder="Enter name">
                    </div>

                    <!-- E-mail -->
                    <div class="form-group mb-3">
                        @if($errors->has('email'))
                            <label class="text-danger">E-mail is required .</label>
                        @else 
                            <label>E-mail</label>
                        @endif
                        <input type="text" name="email" class="form-control rounded-0 shadow-none" plceholder="Enter email">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-3">
                        @if($errors->has('password'))
                            <label class="text-danger">Password is required .</label>
                        @else 
                            <label>Password</label>
                        @endif
                        <input type="password" name="password" class="form-control rounded-0 shadow-none" plceholder="Enter password">
                    </div>

                    <button type="submit" class="btn btn-info shadow-nonte text-white btn-block rounded-0">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection