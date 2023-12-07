@extends('master')
@section('content')
  <!-- Project Page -->
  <div class="post container pt-40">
    <div class="row">
        <div class="col-md-12 animate-box" data-animate-effect="fadeInU"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/4.jpg') }}" alt="">
            <h2 class="mt-20"><span>Busayo</span></h2>
            {{-- <p>Doyin and Dapo Weddin and Pre-wedding shots</p> --}}

            <br />
        </div>
    </div>
</div>
<!-- Gallery -->
<div class="container">
    <div class="row mb-4">
        <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/1.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/1.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/2.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/2.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/3.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/3.jpg') }}" alt="" /> </a>
            </figure>
        </div>
        <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/4.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/4.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/5.jpg') }}" data-caption="Adrah studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/5.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/busayo/6.jpg') }}" data-caption="Adrah Studios Photos"> <img class="img-fluid" src="{{ asset('html/images/gallery/busayo/6.jpg') }}" alt="" /> </a>
            </figure>

    </div>




</div>
@endsection
