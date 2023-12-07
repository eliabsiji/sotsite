@extends('master')
@section('content')
        <!-- Contact -->
        <div class="contact next-section-contact pt-130">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h2>Contact Us</h2>
                    </div>

                    {{-- <!-- Info -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Adrah Studio</h4>
                        <p>
                           We are a photography and videography company that
                            specializes in capturing life’s most precious moments.
                            They believe that every moment is worth capturing, and
                             we’re passionate about helping their clients create
                             lasting memories.We have a presence on different
                             social media platforms.
                        </p>

                    </div> --}}
                    <!-- Location -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Phone</h4>
                        <p>
                            <a href="https://wa.me/4407565241644?text=Hello,%20i%20want%20to%20make%20enquiry%20about%20your%20services"> +447565241644</a>
                        </p>
                        <h4>Email</h4>
                        <p>contact@adrahstudios.com</p>
                        {{-- <h4>Address</h4>
                        <p> 31, Sandringham Close. Wellingborough.NN8 2EJ.</p> --}}
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <div>
                            <h4>Drop us a line!</h4>
                        </div>
                        <form  method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="contact__form"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" value="{{ old('phone') }}" required>
                                    @if ($errors->has('phone'))
                                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12 form-group">
                                    <input name="instagram" type="text" placeholder="Your Instagram " >
                                        @if ($errors->has('instagram'))
                                          <span class="text-danger">{{ $errors->first('instagram') }}</span>
                                        @endif
                                </div>

                                <div class="col-md-12 form-group">What type of event are you enquiring about?
                                    <select name="event" class="col-md-12 form-group" required>
                                        <option> ...Select...</option>
                                        <option> Wedding</option>
                                        <option> Pre-wedding</option>
                                        <option> Portrait Session</option>
                                        <option> Event</option>
                                        <option> Other, specify</option>
                                      </select>
                                      <input name="specify" type="text" placeholder="Specify other events " value="{{ old('specify') }}">
                                        @if ($errors->has('specify'))
                                          <span class="text-danger">{{ $errors->first('specify') }}</span>
                                        @endif
                                        @if ($errors->has('event'))
                                          <span class="text-danger">{{ $errors->first('event') }}</span>
                                        @endif
                                </div>


                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" value="{{ old('subject') }}" required>

                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                     @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                     @endif
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
