<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html"> <img src="<?php echo e(asset('html/images/logo.png')); ?>" class="logo-img" alt=""> </a>

        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Gallery <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="gallery.html" class="dropdown-item"><span>Image Gallery</span></a></li>
                        <li><a href="video.html" class="dropdown-item"><span>Video Gallery</span></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                        <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                        <li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
                        <li><a href="faqs.html" class="dropdown-item"><span>Faq</span></a></li>
                        <li><a href="project-page.html" class="dropdown-item"><span>Project Page</span></a></li>
                        <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                        <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="fa fa-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="project.html">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/navbar.blade.php ENDPATH**/ ?>