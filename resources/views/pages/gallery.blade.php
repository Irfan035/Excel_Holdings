@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="galleryPage d-flex align-items-center">
    <div class="container  text-center">
        <div class="display-3 text-white"><span class="fw-bold">GALLERY</span></div>
        <p class="border border-light text-center py-2 offset-lg-5 offset-3 col-lg-2  col-6">Home - Gallery</p>
    </div>
</section>



<!-- Page about -->



<section class="py-5">
    <div class="container text-center" id="jar">
        <div class="row mx-auto">
            @foreach($gallery as $galleries)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content">
                <img src="{{asset('img/gallery/'.$galleries->image)}}" alt="{{$galleries->title}}" class="img-fluid py-2">
            </div>
            @endforeach


        </div>
        <nav class="mt-5">
            <ul class="pagination justify-content-center pagination-sm">
            </ul>
        </nav>
    </div>
</section>




@endsection