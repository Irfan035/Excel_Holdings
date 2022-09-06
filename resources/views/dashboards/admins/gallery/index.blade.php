@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row shadow-sm p-3">
        <div class="col-12 table-responsive">
        <div class="d-flex align-items-center">
                <h1 class="mr-5">Gallery</h1>
                <a href="galleryCreate" class="btn btn-primary mb-2">Add Gallery</a>
            </div>
            
            <div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
            </div>
            <br>
            <table class="table table-light table-striped table-borderless" id="jar">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>Create Date</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Gallery as $gallery)
                    <tr class="content">
                        <td>{{ $gallery->id }}</td>
                        <td>{{ $gallery->title }}</td>
                        <td><img src="{{asset('img/gallery/'.$gallery->image)}}" class="img-fluid" style="height: 100px !important; width:auto" alt="{{ $gallery->title }}"></td>
                        <td>{{ date('Y-m-d', strtotime($gallery->created_at)) }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.galleryEdit',$gallery->id) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="{{ route('admin.galleryDestroy',$gallery->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="mt-5">
            <ul class="pagination justify-content-center pagination-sm">
            </ul>
        </nav>
    </div>
</div>
@endsection