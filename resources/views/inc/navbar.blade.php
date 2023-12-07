<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="/"> <img src="{{ asset('html/images/logo.png') }}" class="logo-img" alt=""> </a>

        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Portfolio <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portfolio.weddings') }}" class="dropdown-item"><span>Weddings</span></a></li>
                        <li><a href="{{ route('portfolio.events') }}" class="dropdown-item"><span>Events</span></a></li>
                        <li><a href="{{ route('portfolio.portraits') }}" class="dropdown-item"><span>Portraits</span></a></li>
                        <li><a href="{{ route('gallery.video') }}" class="dropdown-item"><span>Video Gallery</span></a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">More <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('faqs') }}" class="dropdown-item"><span>Faq</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
