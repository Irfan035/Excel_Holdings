@extends('dashboards.admins.layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
              
                    
                    <form action="{{route('admin.postUpdate',$posts->id)}}" method="get" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control" value="{{$posts->title}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Post Image</label>
                            <input type="file" name="image" class="form-control" value="{{$posts->image}}">
                        </div>

                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control" required>{{$posts->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($posts->published_at)) }}" required>
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