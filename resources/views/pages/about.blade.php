@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="aboutPage d-flex align-items-center">
    <div class="container  text-center">
        <div class="display-3 text-white"> <span class="fw-bold">ABOUT</span><span class="fw-light"> US</span></div>
        <p class="border border-light text-center py-2 offset-lg-5 offset-3 col-lg-2  col-6">Home - About</p>
    </div>
</section>



<!-- Page about -->
<section class="py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/about-image.jpg')}}" alt="about-image" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <p class="eRed plarge text-uppercase">About Us</p>
                    <h1 class="text-dark">Offering a Flexible Structure of Growth!</h1>
                    <p>Based primarily in Pakistan, we are one of the leading and most successful diversified holding companies. We represent a broad range of services with a focus on Real Estate delivering continuous and sustainable growth that increases long-term shareholder value. We partner with innovative leaders with unique ideas and strong management teams which demonstrate the ability to help us achieve our strategic goal of maximum long-term return to our shareholders.</p>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container pb-5">
        <div class="row">

            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h1 class="text-dark">Vision</h1>
                    <p>We anticipate becoming a leading real estate diversified holding company, maximizing shareholders’ value, and enabling economic development nationally with a specific focus on emerging markets of Pakistan.</p>
                    <h1 class="text-dark">Mission</h1>
                    <p>Guided by an implacable focus on our curx principles, we will constantly aim to implement the demanding initiatives required to achieve our vision as well as to maximize the value of the Company and aim for sustainable growth. Our mission is to carry out investment projects in the domestic markets in accordance with the highest quality standards, guided by the principles of professional ethics. We tie on our strong team experience and the network of our principal investors to generate maximum returns for our stakeholders.</p>
                    <h1 class="text-dark">Values</h1>
                    <p>Communication, commitment, and client care are the core values that emit throughout every project we undertake. Every employee of our company is a curator of our corporate value system. We believe our dedication to being integral tenets of honesty, integrity, and fair business dealings will enable us to continue our long legacy of success.</p>

                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/our-goal.jpg')}}" alt="about-image" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<section class="pt-5">
    <div class="galleryTop">
        <div class="container pt-5 text-center text-white">
            <h1 class="display-2">Highlights</h1>
            <p>A glimpse of the Sialkot motorway city pre-launch ceremony. Mr. Ahsan Sabir- CEO of Excel Holding joined the event as an official partner!</p>
        </div>
    </div>
    <div class="container gallryDown">
        <iframe src="https://www.youtube.com/embed/_CmSPy467LE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>


<section class="py-5 team">
    <div class="container text-center">
        <p class="eRed plarge text-center text-uppercase">Our Team</p>
        <h1 class="text-dark text-uppercase">Meet the team member</h1>
        <div class="row">
            <div class="col-md-4 py-2">
                <a href="http://">
                    <img src="{{asset('img/team1.png')}}" alt="team" class="img-fluid">
                </a>
                <div class="p-2 mt-3 shadow-sm text-dark">
                    <h4 class="eRed">AHSAN SABIR</h4>
                    <p class="text-center">Chief Executive Officer</p>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="03214055055" target="_blank"><i class="fas fa-phone shadow bg-white eRed p-3 rounded-circle "></i></a>
                        <a href="as@excelholdings.pk" target="_blank"><i class="fas fa-envelope shadow eRed bg-white mx-2 p-3 rounded-circle"></i></a>
                        <a href="https://excelholdings.pk/" target="_blank"><i class="fas fa-globe bg-white shadow eRed p-3 rounded-circle "></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 py-2">
                <a href="http://">
                    <img src="{{asset('img/team1.png')}}" alt="team" class="img-fluid">
                </a>
                <div class="p-2 mt-3 shadow-sm text-dark">
                    <h4 class="eRed">KALEEM KAMRAN BUTT</h4>
                    <p class="text-center">Director PR</p>
                </div>
               <ul class="list-unstyled">
                    <li>
                        <a href="03009418289" target="_blank"><i class="fas fa-phone shadow bg-white eRed p-3 rounded-circle "></i></a>
                        <a href="kkb@excelholdings.pk" target="_blank"><i class="fas fa-envelope shadow eRed bg-white mx-2 p-3 rounded-circle"></i></a>
                        <a href="https://excelholdings.pk/" target="_blank"><i class="fas fa-globe bg-white shadow eRed p-3 rounded-circle "></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 py-2">
                <a href="http://">
                    <img src="{{asset('img/team1.png')}}" alt="team" class="img-fluid">
                </a>
                <div class="p-2 mt-3 shadow-sm text-dark">
                    <h4 class="eRed">MUHAMMAD KHALID</h4>
                    <p class="text-center">Director Finance</p>
                </div>
               <ul class="list-unstyled">
                    <li>
                        <a href="03374824534" target="_blank"><i class="fas fa-phone shadow bg-white eRed p-3 rounded-circle "></i></a>
                        <a href="mk@excelholdings.pk" target="_blank"><i class="fas fa-envelope shadow eRed bg-white mx-2 p-3 rounded-circle"></i></a>
                        <a href="https://excelholdings.pk/" target="_blank"><i class="fas fa-globe bg-white shadow eRed p-3 rounded-circle "></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

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
                        <h4 class="text-dark text-uppercase">{!! Str::words("$post->title", 5, ' ...')!!}</h4>
                        <p class="text-center">{!! Str::words("$post->body", 15, ' ...')!!}</p>
                        <a target="_blank" href="{{ route('postShow',$post->id) }}" class="eRed">Read More</a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


@endsection