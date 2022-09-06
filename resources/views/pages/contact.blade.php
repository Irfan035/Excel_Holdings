@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="contactPage d-flex align-items-center">
    <div class="container  text-center">
        <div class="display-3 text-white"> <span class="fw-bold">CONTACT</span><span class="fw-light"> US</span></div>
        <p class="border border-light text-center py-2 offset-lg-5 offset-3 col-lg-2  col-6">Home - Contact</p>
    </div>
</section>

<section class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3 class="text-dark">SEND A MESSAGE</h3>
                <p class="eRed">Let’s work together to bring your ideas to life and launch your next successful project. Request a quote.</p>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                <form action="{{route('contactUs')}}" method="post" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-6"><input type="text" name="name" placeholder="Full Name*" id="" required class="form-control"></div>
                        <div class="col-6"><input type="email" name="email" placeholder="Email*" required class="form-control" id=""></div>
                    </div>
                    <div class="row py-4">
                        <div class="col-6"><input type="tel" name="phone" placeholder="Phone*" id="" required class="form-control"></div>
                        <div class="col-6"><input type="text" name="subject" placeholder="Subject*" required class="form-control" id=""></div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-12">
                            <textarea name="message" id="" cols="30" rows="07" placeholder="Message*" required class="form-control"></textarea>
                        </div>
                    </div>
                    <button class="btn bgRed px-4" type="submit"> SUBMIT</button>

                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container pb-5 text-center">
        <div class="row">
            <div class="col-md-4 py-2">
                <div class="shadow-sm">
                    
                    <div class="ContactIcon date bgRed rounded-circle offset-5 text-center p-3">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase">Location</h4>
                        <p class="text-center">199-C, D.H.A. Commercial Broadway DHA Phase 8, Lahore, Punjab 54792</p>


                    </div>
                </div>
            </div>

            <div class="col-md-4 py-2">
                <div class="shadow-sm">
                   
                    <div class="ContactIcon date bgRed rounded-circle offset-5 text-center p-3">
                        <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase">PHONE</h4>
                        <p class="text-center">+92337 482-4534<br>+92330 725-5557<br>+92300 941-8289</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-2">
                <div class="shadow-sm">
                  
                    <div class="ContactIcon date bgRed rounded-circle offset-5 text-center p-3">
                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="p-3">
                        <h4 class="text-dark text-uppercase"> EMAIL</h4>
                        <p class="text-center">info@excelholdings.com<br>excelholdings10@gmail.com</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54429.811679930564!2d74.432955!3d31.500443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86cc77c5e4ed1ae2!2sExcel%20Energies!5e0!3m2!1sen!2sus!4v1652267802972!5m2!1sen!2sus" width="100%" height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


@endsection