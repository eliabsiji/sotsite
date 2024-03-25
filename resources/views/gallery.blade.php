@extends('master')
@section('content')


<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border bg-color-light m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="galleryAjaxBox" class="ajax-box ajax-box-init mb-4">

                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>

                    <div class="ajax-box-content" id="galleryAjaxBoxContent"></div>

                </div>
            </div>
        </div>
        <div class="row" data-plugin-masonry data-plugin-options="{'itemSelector': '.col-lg-4'}">
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-1.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Baptism
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-2.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Wedding
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-3.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Church Community
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-4.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Wedding
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-5.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Church Community
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-6.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Baptism
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-7.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-1.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Baptism
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-8.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-2.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Wedding
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-lg-4">
                <span class="thumb-info custom-thumb-info-4">
                    <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                        <span class="thumb-info-wrapper">
                            <img src="img/demos/church/gallery/gallery-9.jpg" alt class="img-fluid" />
                        </span>
                    </a>
                    <span class="thumb-info-caption custom-box-shadow">
                        <span class="thumb-info-caption-text">
                            <h2 class="font-weight-bold text-5 text-center">
                                <a data-href="ajax/demo-church-gallery-ajax-on-page-3.html" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
                                    Church Community
                                </a>
                            </h2>
                        </span>
                    </span>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="section section-tertiary section-no-border m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span>
                <h2 class="font-weight-bold custom-text-color-1 m-0">Find out more about the Church. <span class="font-weight-normal custom-secondary-font custom-font-italic">You belong here</span></h2>
            </div>
            <div class="col-lg-2 mt-4 mt-lg-0">
                <a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase">Visitors Guide</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-border custom-position-relative custom-overflow-hidden p-0 m-0">
    <div class="custom-view-our-location text-center">
        <img src="img/demos/church/others/view-our-location.png" alt />
        <a href="#" onclick="initMapAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)" class="custom-view-location custom-secondary-font font-weight-bold text-color-light text-decoration-none">View Our Location</a>
    </div>
    <div id="googlemaps" class="google-map"></div>
</section>


@endsection
