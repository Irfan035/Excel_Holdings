@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Project') }}</div>

                <div class="card-body">
                                    
                    <form action="{{route('admin.projectStore')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Project Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Project Image</label>
                            <input type="file" name="image" class="form-control" required> 
                        </div>

                        <div class="form-group">
                            <label for="">Project Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn my-3 btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection