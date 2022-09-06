@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="projectsPage d-flex align-items-center">
    <div class="container  text-center">
        <div class="display-3 text-white"><span class="fw-light">OUR </span><span class="fw-bold">PROJECTS</span></div>
        <p class="border border-light text-center py-2 offset-lg-5 offset-3 col-lg-2  col-6">Home - Projects</p>
    </div>
</section>



<!-- Page about -->



<section class="py-5 project">
    <div class="container pb-5 text-center" id="jar">
        <p class="eRed plarge text-center text-uppercase">Our Projects</p>
        <h1 class="text-dark text-uppercase">Discover New Projects</h1>
        <div class="row mx-auto text-left">
            @foreach($projects as $project)
            <div class="col-md-4 py-2 content">
                <div class="shadow-sm">
                    <a href="{{ route('projectShow',$project->id) }}" target="_blank">
                        <img src="{{asset('img/projects/'.$project->image)}}" alt="{{$project->title}}" class="img-fluid">
                    </a>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase">{!! Str::words("$project->title", 3, ' ...')!!}</h4>
                        <p>{!! Str::words("$project->body", 20, ' ...')!!}</p>
                        <div class="text-center">
                            <a href="{{ route('projectShow',$project->id) }}" target="_blank" class="eRed ">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>







        <nav class="mt-5">
            <ul class="pagination justify-content-center pagination-sm">
            </ul>
        </nav>
    </div>
</section>

<section class="homeForm py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-white d-flex align-items-center">
                <div>
                    <h3>Request a call back</h3>
                    <p>Would you like to speak to one of our real estate advisers over the phone? Just submit your details and we’ll be in touch shortly. </p>

                </div>
            </div>
            <div class="col-md-6">
                <h5 class="text-white">I would like to discuss:</h5>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                <form action="{{route('keepInTouch')}}" method="post" class="form-group">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6"><input type="text" name="name" placeholder="Name" id="" required class="form-control"></div>
                        <div class="col-6"><input type="email" name="email" placeholder="Email" required class="form-control" id=""></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <input type="tel" name="phone" placeholder="Contact Number" required class="form-control">
                        </div>
                        <div class="col-6">
                            <select name="city" id="" required class="form-control ">
                                <option value="">Select City</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Sialkot">Sialkot</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn bg-white eRed" type="submit"> SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="py-4"></section>
<section class="py-5 blog">
    <div class="container pb-5 text-center">
        <p class="eRed plarge text-center text-uppercase">Our News</p>
        <h1 class="text-dark text-uppercase">Latest Blog Posts</h1>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4 py-2">
                <div class="shadow-sm">
                    <a href="{{ route('postShow',$post->id) }}" target="_blank">
                        <img src="{{asset('img/blog/'.$post->image)}}" class="img-fluid" alt="{{$post->title}}">
                    </a>
                    <div class="date bgRed rounded-circle offset-5">
                        <span class="text-white"><b>{{ date('d', strtotime($post->published_at)) }}</b><br>{{ date('F', strtotime($post->published_at)) }}</span>
                    </div>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase">{!! Str::words("$post->title", 2, ' ...')!!}</h4>
                        <p class="text-center">{!! Str::words("$post->body", 16, ' ...')!!}</p>
                        <a target="_blank" href="{{ route('postShow',$post->id) }}" class="eRed">Read More</a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


@endsection