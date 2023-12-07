@extends('master')
@section('content')
        <!-- Projects -->
        <section class="projects pt-130 mb-60">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h4>Weddings</h4>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.doyin-dapo') }}">1</a>
                                </span>
                                <h5><a href="{{ route('portfolio.doyin-dapo') }}">Doyin and Dapo  Wedding</a></h5> <a href="{{ route('portfolio.doyin-dapo') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/doyinanddapoprewedding/l12.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.pre-doyin-dapo') }}">02</a>
                                </span>
                                <h5><a href="{{ route('portfolio.pre-doyin-dapo') }}">Doyin and Dapo Pre-Wedding</a></h5> <a href="{{ route('portfolio.pre-doyin-dapo') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/joananddavies/9.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.joan-davies') }}">03</a>
                                </span>
                                <h5><a href="{{ route('portfolio.joan-davies') }}">Joan and Davis Wedding</a></h5> <a href="{{ route('portfolio.joan-davies') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/isiwatandkazeem/9.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.isiwat-kazeem') }}">4</a>
                                </span>
                                <h5><a href="{{ route('portfolio.isiwat-kazeem') }}">Isiwat and Kazeem</a></h5> <a href="{{ route('portfolio.isiwat-kazeem') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/oliviaandjudah/4.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.olivia-judah') }}">5</a>
                                </span>
                                <h5><a href="{{ route('portfolio.olivia-judah') }}">Olivia and Judah</a></h5> <a href="{{ route('portfolio.olivia-judah') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
@endsection
