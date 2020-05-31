@extends('layouts.app')

@section('content')
<div class="user-index">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex p-2 bg-white">
                    <div>
                        <h5 class="mb-0 mt-2">All Users</h5>
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('admin.users.create')}}" class="btn btn-light rounded-0 shadow-none btn-light">
                            <img src="{{asset('assets/images/static/plus.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr>
                            <td><p class="mb-0 text-center">SL</p></td>
                            <td><p class="mb-0">Name</p></td>
                            <td><p class="mb-0">E-mail</p></td>
                            <td><p class="mb-0 text-center">Type</p></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-capitalize">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center text-capitalize">{{$user->type}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection