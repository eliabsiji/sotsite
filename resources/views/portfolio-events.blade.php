@extends('master')
@section('content')
        <!-- Projects -->
        <section class="projects pt-130 mb-60">
            <div class="container">
                {{-- <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h4>Our Events</h4>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/02.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page-2.html">01</a>
                                </span>
                                <h5><a href="project-page-2.html">Wedding Shoots</a></h5> <a href="project-page-2.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/06.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page.html">02</a>
                                </span>
                                <h5><a href="project-page.html">Portrait Photography</a></h5> <a href="project-page.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/05.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page.html">03</a>
                                </span>
                                <h5><a href="project-page.html">Travel Photography</a></h5> <a href="project-page.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/04.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page.html">04</a>
                                </span>
                                <h5><a href="project-page.html">Product Photography</a></h5> <a href="project-page.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/01.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page.html">05</a>
                                </span>
                                <h5><a href="project-page.html">Fashion Photography</a></h5> <a href="project-page.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="images/services/03.jpg" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="project-page.html">06</a>
                                </span>
                                <h5><a href="project-page.html">Sport Photography</a></h5> <a href="project-page.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row mb-4">
                    <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/1.jpg') }}" data-caption="Quisque in felis"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/1.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/2.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/2.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/3.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/3.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/4.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/4.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/5.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/5.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/6.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/6.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/7.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/7.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/8.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/8.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/9.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/9.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/10.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/10.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/11.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/11.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/12.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/12.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/13.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/13.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/14.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/14.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>
                    <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/15.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/15.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/jayat40/16.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/jayat40/16.jpg') }}" alt="" /> </a>
                        </figure>

                    </div>

                </div>
            </div>
        </section>
@endsection
