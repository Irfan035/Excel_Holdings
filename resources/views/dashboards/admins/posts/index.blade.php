@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row shadow-sm p-3">
        <div class="col-12 table-responsive">
            <div class="d-flex align-items-center">
                <h1 class="mr-5">Posts</h1>
                <a href="postCreate" class="btn btn-primary mb-2">Create Post</a>
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
                        <th>Post Image</th>
                        <th>Published At</th>
                        <th>Created at</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{!! Str::words("$post->title", 4, ' ...')!!}</td>
                        
                        <td><img src="{{asset('img/blog/'.$post->image)}}" class="img-fluid" alt="{{$post->title}}" width="100px" height="50px"></td>
                        <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                        <td>{{date('Y-m-d', strtotime($post->created_at))}}</td>
                        <td>
                            <a class="btn btn-info" target="_blank" href="{{ route('postShow',$post->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-info" href="{{ route('admin.postEdit',$post->id) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{ route('admin.postDestroy',$post->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
    </div>
</div>
@endsection