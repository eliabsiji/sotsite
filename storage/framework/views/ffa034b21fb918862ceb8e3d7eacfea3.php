<?php $__env->startSection('content'); ?>
        <!-- Gallery -->
        <div class="pozo-section pt-130">
            <div class="pozo-gallery">
                <div class="container">
                    <div class="row mb-4">
                        <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <h4>Video Gallery</h4>
                        </div>
                        <!-- IMPORTANT: Some functionality (ajax, iframes, etc) will not work when you're opening local file directly on your browser, the code must be running on a web server. SOURCE: https://fancyapps.com/fancybox/3/docs/ -->
                        <div class="col-md-6 mb-40 animate-box" data-animate-effect="fadeInUp">
                            <a data-fancybox="" href="https://www.youtube.com/watch?v=O_77RClvyxU"> <img class="img-fluid" src="<?php echo e(asset('html/images/gallery/oliviaandjudah/12.jpg')); ?>" alt="">
                                <p><span class="fa fa-play"></span></p>
                            </a>
                            <h5>Wedding</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/video.blade.php ENDPATH**/ ?>