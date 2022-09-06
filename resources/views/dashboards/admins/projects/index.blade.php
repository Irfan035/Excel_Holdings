@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row shadow-sm p-3">
        <div class="col-12 table-responsive">
            <div class="d-flex align-items-center">
                <h1 class="mr-5">Project</h1>
                <a href="projectCreate" class="btn btn-primary mb-2">Create Project</a>
            </div>
            <div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
            </div>
            <br>
            <table class="table table-light table-striped table-borderless">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Project Image</th>
                        <th>Created at</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td><img src="{{asset('img/projects/'.$project->image)}}" class="img-fluid" alt="{{$project->title}}" width="100px" height="50px"></td>
                        <td>{{date('Y-m-d', strtotime($project->created_at))}}</td>
                        <td>
                            <a class="btn btn-info" target="_blank" href="{{ route('projectShow',$project->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-info" href="{{ route('admin.projectEdit',$project->id) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{ route('admin.projectDestroy',$project->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $projects->links() !!}
        </div>
    </div>
</div>
@endsection