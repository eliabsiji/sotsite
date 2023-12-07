@extends('master')
@section('content')
        <!-- Projects -->
        <section class="projects pt-130 mb-60">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h4>Pricing Plan</h4>
                    </div>
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h5><li><a href="#">Download Detailed Pricing Info here</a></li></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-box animate-box" data-animate-effect="fadeInUp">
                            <div class="price-box-inner img-grayscale" style="background-image: url(images/price/bg1.jpg)">
                                <ul>
                                    <li class="pricing-title">
                                        <h3 class="pricing-pt-title">Photography</h3>
                                    </li>
                                    <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">85</span> </li>
                                    <li class="pricing-content">
                                        <ul>
                                            <li>1 Hour Session</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-box animate-box" data-animate-effect="fadeInUp">
                            <div class="price-box-inner" style="background-image: url(images/price/bg2.jpg)">
                                <ul>
                                    <li class="pricing-title">
                                        <h3 class="pricing-pt-title">Videography</h3>
                                    </li>
                                    <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price">100</span> </li>
                                    <li class="pricing-content">
                                        <ul>
                                            <li>1 Hour Session</li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-box animate-box" data-animate-effect="fadeInUp">
                            <div class="price-box-inner" style="background-image: url(images/price/bg3.jpg)">
                                <ul>
                                    <li class="pricing-title">
                                        <h3 class="pricing-pt-title">Live Streamming</h3>
                                    </li>
                                    <li class="pricing-prices"> <sup class="pricing-dolar"></sup> <span class="pricing-price">Contact Us</span> </li>
                                    <li class="pricing-content">
                                        {{-- <ul>
                                            <li>12 Hours Session</li>
                                            <li>Photo Editing</li>
                                            <li>250 Digital Images</li>
                                            <li>Online Gallery</li>
                                        </ul> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h5><li><a href="https://wa.me/4407565241644?text=Hello,%20I%20want%20to%20make%20enquiry%20about%20your%20pricing">Contact us for more enquiry </a></li></h5>
                    </div>
                </div>
            </div>
        </section>
@endsection
