@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
               
                    <form action="{{route('admin.galleryUpdate',$gallery->id)}}" method="get" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Image Title</label>
                            <input type="text" name="title" class="form-control" value="{{$gallery->title}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn my-3 btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection