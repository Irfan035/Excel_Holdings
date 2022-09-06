@extends('dashboards.admins.layouts.appAdmin')

@section('content')

<!-- Begin Page Content -->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container shadow-sm p-3">
        <div class="row pb-3 pt-2 r">
            <div class="col-md-6">
                <h1>Users Management</h1>
            </div>
          

        </div>


        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif


        <table class="table table-light table-striped table-borderless table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Profile Image</th>
                    <th>Action</th>
                </tr>
                <thead>
                    @foreach ($data as $key => $user)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{$user->role}}</td>
                        <td> <img class="profile-user-img img-fluid img-circle admin_picture" src="{{asset('img/'.$user->picture)}}" alt="{{$user->name}}" width="50px" height="100px"></td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.show',$user->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-info" href="{{ route('admin.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{ route('admin.destroy',$user->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
            <tbody>
                @endforeach
        </table>


        {!! $data->render() !!}
    </div>
</div>

@endsection