<div class="top bg-gradient-dark py-2">
    <div class="container">
        <div class="row text-white">
            <div class="col-9 border-right text-right">
                <i class="fa fa-map-marker" aria-hidden="true"></i> <span>199-C, D.H.A. Commercial Broadway Phase 8, Lahore</span>
            </div>
            <div class="col-3">
                <i class="fa fa-envelope" aria-hidden="true"></i> <span>Support@excelholdings.com</span>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')

@section('content')


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-indicators carousel-indicators-numbers">


        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="1" aria-label="Slide 2">2</button>
        <button type="button" data-target="#carouselExampleCaptions" data-slide-to="2" aria-label="Slide 3">3</button>
        <a class="carousel-control-p" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>


    </div>

    <div class="carousel-inner">

        <div class="carousel-item active slider1">
            <div class="carousel-caption">
                <div class="col-md-8 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h1 class="text-uppercase display-3">For The Intelligent Investor</h1>
                    <p class="col-md-10 ">One-stop solution to all your marketing, investment, property management, and construction needs.</p>
                    <a href="#Get-a-qoute" class="btn eRed px-4 py-2">GET A QOUTE</a>
                </div>
            </div>

        </div>
        <div class="carousel-item slider2">
            <div class="carousel-caption">
                <div class="col-md-8 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h1 class="text-uppercase display-3">Invest In Your Dreams/Future</h1>
                    <p class="col-md-10 ">Using experience, traditions, and technology to turn your dreams into reality.</p>
                    <a href="{{ url('contact')}}" class="btn eRed px-4 py-2">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item slider3">
            <div class="carousel-caption">
                <div class="col-md-8 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h1 class="text-uppercase display-3">Today, Tomorrow, and Forever / Building Futures.</h1>
                    <p class="col-md-10 ">A profitable journey to Balance Your Best Interests.</p>
                   
                </div>
            </div>
        </div>

    </div>


</div>
<div class="video-play">
    <a href="http://">
        <img src="{{asset('img/video.png')}}" alt="video play" class="img-fluid wow slideInUp" data-wow-duration="2s" data-wow-delay="0.6s">
    </a>
</div>

<!-- social icons -->
<ul class="social list-unstyled">
    <li>
        <a href="https://www.facebook.com/excelholding/?ref=page_internal&_rdc=2&_rdr" target="_blank"><i class="fab fa-facebook text-white p-2 rounded-circle "></i></a>
    </li>
    <li>
        <a href="https://www.linkedin.com/company/excelholdings/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin my-2 bgRed p-2 rounded-circle"></i></a>
    </li>
    <li>
        <a href="https://www.instagram.com/excelholdings.pk/" target="_blank"><i class="fab fa-instagram text-white p-2 rounded-circle "></i></a>
    </li>
</ul>


<!-- Page about -->
<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                <img src="{{asset('img/about-image.jpg')}}" alt="about-image" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <p class="eRed plarge text-uppercase">About Us</p>
                    <h1 class="text-dark">Offering a Flexible Structure of Growth</h1>
                    <p>Based primarily in Pakistan, we are one of the leading and most successful diversified holding companies. We represent a broad range of services with a focus on Real Estate delivering continuous and sustainable growth that increases long-term shareholder value. We partner with innovative leaders with unique ideas and strong management teams which demonstrate the ability to help us achieve our strategic goal of maximum long-term return to our shareholders.</p>
                    <a href="{{ url('about')}}" class="btn bgRed">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 project">
    <div class="container pb-5 text-center">
        <p class="eRed plarge text-center text-uppercase">Our Projects</p>
        <h1 class="text-dark text-uppercase">HAVE A LOOK AT OUR PROJECTS</h1>
        <div class="row text-left">
            @foreach($projects as $project)
            <div class="col-md-4 py-2">
                <div class="shadow-sm">
                    <a target="_blank" href="{{ route('projectShow',$project->id) }}">
                        <img src="{{asset('img/projects/'.$project->image)}}" alt="{{$project->title}}" class="img-fluid">
                    </a>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase">{!! Str::words("$project->title", 2, ' ...')!!}</h4>
                        <p>{!! Str::words("$project->body", 16, ' ...')!!}</p>
                        <div class="text-center">
                            <a href="{{ route('projectShow',$project->id) }}" target="_blank" class="eRed ">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ url('projects')}}" class="btn bgRed mt-4">MORE PROJECTS</a>
    </div>
</section>


<section id="Get-a-qoute" class="homeForm py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-white d-flex align-items-center">
                <div>
                    <h3>REQUEST A CALLBACK</h3>
                    <p>Excel holding is customer-centric and easy to do business with Learn more by contacting us now.</p>

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

<section>
    <div class="galleryTop">
        <div class="container pt-5">
            <p class="plarge text-white text-center text-uppercase">Our Gallery</p>
            <h1 class="text-white text-center text-uppercase">WE PROVIDE THE BEST <br> PROPERTY FOR YOU</h1>
        </div>
    </div>
    <div class="container gallryDown pb-5">
        <div class="row">
            @foreach($gallery as $galleries)
            <div class="col-6">
                <img src="{{asset('img/gallery/'.$galleries->image)}}" alt="{{$galleries->title}}" class="img-fluid py-2">
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="py-5 blog">
    <div class="container pb-5 text-center">
        <p class="eRed plarge text-center text-uppercase">Our News</p>
        <h1 class="text-dark text-uppercase">Discover News Projects</h1>
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
                        <h4 class="text-dark text-uppercase">{!! Str::words("$post->title", 5, ' ...')!!}</h4>
                        <p class="text-center">{!! Str::words("$post->body", 10, ' ...')!!}</p>
                        <a target="_blank" href="{{ route('postShow',$post->id) }}" class="eRed">Read More</a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection