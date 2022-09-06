@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row py-3">
        <div class="col-md-2 px-2">
            <p class="py-4 px-2 text-center shadow txet-dark w-50 rounded">{{date('d F', strtotime($posts->published_at))}}<br>{{ date('y', strtotime($posts->published_at)) }}</p>
        </div>
        <div class="col-md-10">
            <h1 class="text-dark  fw-bold">{{$posts->title}}</h1>
        </div>
        <div class="col-12">
            <img src="{{asset('img/blog/'.$posts->image)}}" alt="{{$posts->title}}" class="img-fluid"> <br>
            <p class="pt-2">{!! $posts->body !!}</p>

        </div>

    </div>
</div>


@endsection