<?php include("inc/header.php");?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact section -->
        <section class="contact-area ptb-100"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="contact-info">
                            <h3 class="title">Get in Touch</h3>
                            <ul>
                                <li><i class="icofont-google-map"></i>  210 Quadra Street Victoria, Canada</li>
                                <li><i class="icofont-envelope"></i>  <a href="#"><span class="__cf_email__" data-cfemail="88edf0e9e5f8e4edc8e5e9e1e4a6ebe7e5">[email&#160;protected]</span></a></li>
                                <li><i class="icofont-smart-phone"></i>  +44 458 7895</li>
                            </ul>
                        </div>

                        <div class="opening-hours">
                            <h3 class="title">Opening Hours</h3>
                            <ul>
                                <li>Mon - Thu <span>7.00 AM - 20.00 PM</span></li>
                                <li>Friday <span>7.00 AM - 20.00 PM</span></li>
                                <li>Saturday - Thu <span>7.00 AM - 20.00 PM</span></li>
                                <li>Sunday <span>7.00 AM - 20.00 PM</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-7">
                        <h3 class="title">Questions? Let our experts help!</h3>
                        <p>Team of Professionals</p>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number" id="number" required data-error="Please enter your number" placeholder="Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact section -->

        <!-- Map -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.828697336744!2d-123.36207488415738!3d48.44062743798364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548f73811b3b8513%3A0x968aa5572a89f353!2s210-2750%20Quadra%20St%2C%20Victoria%2C%20BC%20V8T%204E8%2C%20Canada!5e0!3m2!1sen!2sbd!4v1620281800816!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- End Map -->

<?php include("inc/footer.php");?>