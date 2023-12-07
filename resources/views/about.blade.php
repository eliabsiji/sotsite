@extends('master')
@section('content')
  <!-- About Us -->
  <section class="about pt-130">
    <div class="container">
        <div class="row">
            <div class="col-md-4 image animate-box" data-animate-effect="fadeInUp">
                <div class="img"> <img src="{{ asset('html/images/slider/2.jpg') }}" alt=""> </div>
            </div>
            <div class="col-md-8 image animate-box" data-animate-effect="fadeInUp">
                <!-- About -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>Who We Are <span>@ Adrah Studios</span></h3>
                        <p>Adrah Studios is a photography and videography company that specializes in capturing life’s most precious moments. We believe that every moment is worth capturing, and we’re passionate about helping their clients create lasting memories.
                             We have a presence on different social media platforms.</p>
                        <p><b>Phone :<a href="https://wa.me/4407565241644?text=Hello,%20i%20want%20to%20make%20enquiry%20about%20your%20services"> +447565241644</a></b>

                        <br /><b>E-mail :</b> contact@adrahstudios.com
                        </p>
                    </div>
                </div>
                <!-- Team -->
                <div class="row mt-60">
                    <div class="col-md-12">
                        <h3>Professional <span></span>Team</span></h3>
                        <br />
                    </div>
                    <div class="col-md-6">
                        <div class="team-holder">
                            <div class="team-image-holder">
                                <a href="{{ route('team1') }}">
                                    <img src="{{ asset('html/images/gallery/51.jpg') }}" class="img-fluid" alt="">
                                    <div class="team-side-info">
                                        <h4 class="team-name">Adetunji  Ayeni</h4>
                                        <h6 class="team-position">Lead Creative Director</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <ul class="team-info-social text-center">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="team-holder">
                            <div class="team-image-holder">
                                <a href="{{ route('team2') }}">
                                <img src="{{ asset('html/images/gallery/54.jpg') }}" class="img-fluid" alt="">
                                <div class="team-side-info">
                                    <h4 class="team-name">Simeon Owolabi </h4>
                                    <h6 class="team-position">Team Lead</h6>
                                </div>
                                </a>
                            </div>
                        </div>
                        <ul class="team-info-social text-center">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
