@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">

               

                <h1 class="text-dark text-uppercase">{{$projects->title}}</h1>
                <img src="{{asset('img/projects/'.$projects->image)}}" class="img-fluid w-100" alt="{{$projects->title}}"><br>
                <p class="pt-2">
                    {!! $projects->body !!}
                </p>
            

        </div>
    </div>
    @endsection