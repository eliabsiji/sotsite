@extends('master')
@section('content')
        <!-- Projects -->
        <section class="projects pt-130 mb-60">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h4>Our Potraits</h4>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/peejay/10.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.peejay') }}">1</a>
                                </span>
                                <h5><a href="{{ route('portfolio.peejay') }}">PeeJay</a></h5> <a href="{{ route('portfolio.peejay') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/busayo/2.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.busayo') }}">02</a>
                                </span>
                                <h5><a href="{{ route('portfolio.busayo') }}">Busayo</a></h5> <a href="{{ route('portfolio.busayo') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/korede/2.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.korede') }}">03</a>
                                </span>
                                <h5><a href="{{ route('portfolio.korede') }}">Korede</a></h5> <a href="{{ route('portfolio.korede') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/ogunrinade/5.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.ogunrinade') }}">4</a>
                                </span>
                                <h5><a href="{{ route('portfolio.ogunrinade') }}">Ogunrinade</a></h5> <a href="{{ route('portfolio.ogunrinade') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/mrsjaiyesimi/4.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.jayesimi') }}">5</a>
                                </span>
                                <h5><a href="{{ route('portfolio.jayesimi') }}">Mrs Jayesimi</a></h5> <a href="{{ route('portfolio.jayesimi') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('html/images/gallery/seunsoyinka/4.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('portfolio.soyinka') }}">5</a>
                                </span>
                                <h5><a href="{{ route('portfolio.soyinka') }}">Seun Soyinka</a></h5> <a href="{{ route('portfolio.soyinka') }}"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
