<?php $__env->startSection('content'); ?>
        <!-- Contact -->
        <div class="contact next-section-contact pt-130">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h2>Contact Us</h2>
                    </div>

                    
                    <!-- Location -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Phone</h4>
                        <p>
                            <a href="https://wa.me/4407565241644?text=Hello,%20i%20want%20to%20make%20enquiry%20about%20your%20services"> +447565241644</a>
                        </p>
                        <h4>Email</h4>
                        <p>contact@adrahstudios.com</p>
                        
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <div>
                            <h4>Drop us a line!</h4>
                        </div>
                        <form  method="POST" action="<?php echo e(route('contact.us.store')); ?>" id="contactUSForm" class="contact__form"  enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required value="<?php echo e(old('name')); ?>">
                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                        <?php endif; ?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" value="<?php echo e(old('email')); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" value="<?php echo e(old('phone')); ?>" required>
                                    <?php if($errors->has('phone')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input name="instagram" type="text" placeholder="Your Instagram " >
                                        <?php if($errors->has('instagram')): ?>
                                          <span class="text-danger"><?php echo e($errors->first('instagram')); ?></span>
                                        <?php endif; ?>
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
                                      <input name="specify" type="text" placeholder="Specify other events " value="<?php echo e(old('specify')); ?>">
                                        <?php if($errors->has('specify')): ?>
                                          <span class="text-danger"><?php echo e($errors->first('specify')); ?></span>
                                        <?php endif; ?>
                                        <?php if($errors->has('event')): ?>
                                          <span class="text-danger"><?php echo e($errors->first('event')); ?></span>
                                        <?php endif; ?>
                                </div>


                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" value="<?php echo e(old('subject')); ?>" required>

                                    <?php if($errors->has('subject')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('subject')); ?></span>
                                     <?php endif; ?>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required><?php echo e(old('message')); ?></textarea>
                                    <?php if($errors->has('message')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
                                     <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/contact.blade.php ENDPATH**/ ?>