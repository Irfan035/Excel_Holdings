@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-2">
        <div class="col-lg-6">
            <h1> Show User</h1>
        </div>
        <div class="col-lg-6">
            <a class="btn btn-primary" href="{{ route('admin.userList') }}"> Back</a>
        </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 shadow p-5 m-3">
        <div class="form-group">
              <img class="profile-user-img img-fluid img-circle admin_picture" src="{{asset(Auth::user()->picture)}}" alt="{{Auth::user()->name}}" width="200px" height="200px">
        </div>
        <div class="form-group">
           <strong class="text-dark display-6">Name: </strong>
            {{ $user->name }}
        </div>
        <div class="form-group">
          <strong class="text-dark display-6">Email: </strong>
            {{ $user->email }} 
        </div>
        <div class="form-group">
           
            <strong class="text-dark display-6">Roles: </strong>
            {{ $user->role }} 
            (1 for admin, 2 for user)
        </div>
    </div>
</div>
</div>
</div>
@endsection