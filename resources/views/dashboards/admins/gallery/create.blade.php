@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Gallery') }}</div>

                <div class="card-body">
                
                    
                    <form action="{{_('galleryStore')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group py-1">
                            <label for="">Image Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="">Gallery Image</label>
                            <input type="file" name="image" class="form-control" required> 
                        </div>

                        
                        <button type="submit" class="btn my-3 btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection