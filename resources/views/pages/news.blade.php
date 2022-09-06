@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="newsPage d-flex align-items-center">
    <div class="container  text-center">
        <div class="display-3 text-white"><span class="fw-light">OUR </span><span class="fw-bold">NEWS</span></div>
        <p class="border border-light text-center py-2 offset-lg-5 offset-3 col-lg-2  col-6">Home - News</p>
    </div>
</section>



<!-- Page about -->



<section class="py-5">
    <div class="container" id="jar">
        @foreach($posts as $post)
        <div class="row py-3 content ">
            <div class="col-md-2 px-2">
                <p class="py-4 px-2 text-center shadow txet-dark w-50 rounded">{{ date('d F', strtotime($post->published_at)) }}<br>{{ date('y', strtotime($post->published_at)) }}</p>
            </div>
            <div class="col-md-10">
                <h1 class="text-dark  fw-bold">{!! Str::words("$post->title", 5, ' ...')!!}</h1>
            </div>
            <div class="col-12">
                <a target="_blank" href="{{ route('postShow',$post->id) }}">
                    <img src="{{asset('img/blog/'.$post->image)}}" alt="{{$post->title}}" class="img-fluid">
                </a>
                <p class="pt-2">{!! Str::words("$post->body", 35, ' ...')!!}</p>
                <a target="_blank" href="{{ route('postShow',$post->id) }}" class="eRed">Read More</a>
            </div>
        </div>
        @endforeach
        <nav class="mt-5">
            <ul class="pagination justify-content-center pagination-sm">
            </ul>
        </nav>
    </div>
</section>




@endsection