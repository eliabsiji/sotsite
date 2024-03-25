@extends('master')
@section('content')




<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Contact</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-4 mb-3">
        <div class="col-lg-8">

            <h2 class="font-weight-bold text-color-dark">- Send a Message</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>

            <form class="contact-form custom-contact-form-style-1" action="https://www.okler.net/previews/porto/10.0.0/php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <input type="hidden" name="subject" value="Contact Message Received" />
                <div class="row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-user icons text-color-primary"></i>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-envelope icons text-color-primary"></i>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <div class="custom-input-box">
                            <i class="icon-bubble icons text-color-primary"></i>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">

            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-location-pin icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Address</h2>
                            <p class="text-4">
                                229/230 K2 House, Heathfield Way,<br>
                                Northampton NN5 7QP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-phone icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Phone</h2>
                            <p class="text-4">
                                Phone :+447847530525 <br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon mt-1">
                            <i class="icon-envelope icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-color-dark">- Email</h2>
                            <p class="text-4">
                                <a href="#" class="text-decoration-none"><span class="__cf_email__" data-cfemail="4c212d25200c29342d213c2029622f2321">contactus@sotsmnorthamptonuk.org</span></a><br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map mt-4 mb-0"></div>
<section id="talkus" class="section section-no-border bg-color-light m-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-md-0">
                <h2 class="font-weight-bold">Talk to Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor ligula nec.</p>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 position-relative">
                        <div class="custom-location">
                            <img src="img/demos/church/others/pin.png" alt class="img-fluid" />
                            <h4 class="font-weight-bold custom-primary-font mb-1">Los Angeles</h4>
                            <p>
                                Porto Blvd, Suite 100<br>
                                Los Angeles/CA<br>
                                <strong>Phone:</strong> <a class="custom-text-color-default" href="tel:+123456789">123-456-7890</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 position-relative">
                        <div class="custom-location">
                            <img src="img/demos/church/others/pin.png" alt class="img-fluid" />
                            <h4 class="font-weight-bold custom-primary-font mb-1">New York</h4>
                            <p>
                                Porto Blvd, Suite 100<br>
                                New York/NY<br>
                                <strong>Phone:</strong> <a class="custom-text-color-default" href="tel:+123456789">123-456-7890</a>
                            </p>
                        </div>
                    </div>
                </div>
                <form id="contactFormMessage" class="contact-form custom-form-style-1 mt-4" action="https://www.okler.net/previews/porto/10.0.0/php/contact-form.php" method="POST">
                    <h6 class="font-weight-bold custom-primary-font">Send a Message:</h6>
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactFormMessageSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactFormMessageError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 mt-2 d-block" id="contactFormMessageErrorMessage"></span>
                    </div>

                    <input type="hidden" name="subject" value="Church - Subject" />
                    <div class="row mb-3">
                        <div class="form-group col-sm-6">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control custom-xs-mb" name="name" id="contactName" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="contactEmail" placeholder="Your E-mail" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="contactMessage" placeholder="Your Message" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary custom-btn-style-1 text-uppercase float-end" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="img/demos/church/about-us/about-us-gallery-1.jpg" alt class="img-fluid custom-border-1 custom-box-shadow" />
                <a href="demo-church-gallery.html" class="btn btn-primary custom-btn-style-1 text-uppercase float-end mt-3">View Gallery</a>
            </div>
        </div>
    </div>
</section>

@endsection
