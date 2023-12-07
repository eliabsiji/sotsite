<?php $__env->startSection('content'); ?>
<?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <section class="pozo-section-slider pt-130">
        <div class="next-container-center">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="swiper-slide-block">
                            <div class="swiper-slide-block-img" data-swiper-parallax-y="70%">
                                <a href="#"> <img src="<?php echo e(asset('html/images/slider/2.jpg')); ?>" alt=""> </a>
                            </div>
                            <div class="swiper-slide-block-text">
                                <h2 data-swiper-parallax-x="-60%" class="next-main-title">OUR PHILOSOPHY</h2>

                                <p data-swiper-parallax-x="-40%" class="next-paragraph">Our photography and videography business specializes in capturing life's most precious moments. We believe every moment is worth capturing, and we're passionate about helping our clients create lasting memories.
                                    Contact us today to learn more about our services and how we can help you create memories that will last a lifetime.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next animate-box" data-animate-effect="fadeInRight"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </div>
                <div class="swiper-button-prev animate-box" data-animate-effect="fadeInLeft"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </div>
            </div>
        </div>
    </section>
</div>


<!-- Gallery -->
<div class="pozo-section"  >
    <div class="container">
        <div class="row mb-4">
            <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                <h4>Recent <span>Shots</span></h4>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/9.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/9.jpg')); ?>" alt="" onContextMenu="return false;" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/10.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/10.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/11.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/11.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/21.jpg')); ?>" data-caption="Adrah Studios"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/21.jpg')); ?>" alt="" /> </a>
                </figure>
            </div>

            <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/13.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/13.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/14.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/14.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/24.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/24.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/19.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/19.jpg')); ?>" alt="" /> </a>
                </figure>
            </div>

            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/12.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/12.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/16.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/16.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/25.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/25.jpg')); ?>" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/17.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/17.jpg')); ?>" alt="" /> </a>
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
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/26.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/26.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/27.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/27.jpg')); ?>" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/15.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/15.jpg')); ?>" alt="" /> </a>
                            </figure>

                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/28.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/28.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/29.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/29.jpg')); ?>" alt="" /> </a>
                            </figure>

                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/30.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/32.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/31.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/31.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/35.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/35.jpg')); ?>" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/33.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/33.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/34.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/34.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/36.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/36.jpg')); ?>" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/35.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/35.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/50.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/50.jpg')); ?>" alt="" /> </a>
                            </figure>

                        </div>
                    </div>
                    <div class="row align-items-stretch pozo-photos" id="pozo-section-photos">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/22.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/22.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/23.jpg')); ?>" data-caption="Adrah Studios Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/23.jpg')); ?>" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/15.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/15.jpg')); ?>" alt="" /> </a>
                            </figure>

                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/37.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/28.jpg')); ?>" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="<?php echo e(asset('html/images/gallery/29.jpg')); ?>" data-caption="Adrah Studio Pictures"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/29.jpg')); ?>" alt="" /> </a>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/home.blade.php ENDPATH**/ ?>