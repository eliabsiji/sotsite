@extends('master')
@section('content')
        <!-- Gallery -->
        <div class="pozo-section pt-130">
            <div class="container">
                <div class="row mb-4">
                    <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h4>IMAGE <span> GALLERY</span></h4>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/9.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/9.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/10.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/10.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/11.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/11.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/21.jpg') }}" data-caption="Adrah Studios"> <img class="img-fluid" src="{{ asset('html/images/gallery/21.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>

                    <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/13.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/13.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/14.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/14.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/24.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/24.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/19.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/19.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>

                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/12.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/12.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/16.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/16.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/25.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/25.jpg') }}" alt="" /> </a>
                        </figure>
                        <figure>
                            <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/17.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/17.jpg') }}" alt="" /> </a>
                        </figure>
                    </div>
                </div>
                <!-- show more -->
                <div class="row mb-4 align-items-stretch mt-60">
                    <div class="col-12">
                        <!-- show more -->
                        <div class="pozo-show-more-container">
                            <div class="row align-items-stretch pozo-photos" id="pozo-section-photos">
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/26.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/26.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/27.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/27.jpg') }}" alt="" /> </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/51.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/51.jpg') }}" alt="" /> </a>
                                    </figure>

                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/28.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/28.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/29.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/29.jpg') }}" alt="" /> </a>
                                    </figure>

                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/30.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/32.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/31.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/31.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/35.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/35.jpg') }}" alt="" /> </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/33.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/33.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/34.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/34.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/36.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/36.jpg') }}" alt="" /> </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/35.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/35.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/50.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/50.jpg') }}" alt="" /> </a>
                                    </figure>

                                </div>
                            </div>
                            <div class="row align-items-stretch pozo-photos" id="pozo-section-photos">
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/22.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/22.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/23.jpg') }}" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/23.jpg') }}" alt="" /> </a>
                                    </figure>
                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/15.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/15.jpg') }}" alt="" /> </a>
                                    </figure>

                                </div>
                                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/37.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/28.jpg') }}" alt="" /> </a>
                                    </figure>
                                    <figure>
                                        <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/29.jpg') }}" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="{{ asset('html/images/gallery/29.jpg') }}" alt="" /> </a>
                                    </figure>

                                </div>

                            </div>
                        </div>




                        <!-- add more -->
                        <div class="pozo-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                            <a href="index.html#" class="pozo-more-trigger flex"> <span class="plus flex-center">&nbsp;</span> </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
@endsection
