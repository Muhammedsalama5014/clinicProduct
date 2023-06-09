<?php include("inc/header.php");?>
  <?php
  use Clinic\Classes\Models\Setting;
  use Clinic\Classes\Models\Product;
  use Clinic\Classes\Models\Order;

  $setting = new Setting();
  $aboutHeader = $setting->getAboutHeader();
  $aboutBody = $setting->getAboutBody();

  $product = new Product();
  $order = new Order();

  $productsCount = $product->getCount();
  $ordersCount = $order->getCount();

  ?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>About Us</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
        
        <!-- Welcome Section -->
        <section class="welcome-section ptb-100"> 
            <div class="container">
                <div class="section-title">
                    <h2>Welcome to Promedi</h2>
                    <p><?php echo $aboutHeader ?></p>
                </div>
                
                <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-stethoscope-alt"></i>
                            </div>

                            <h3>Modern Clinic</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-doctor-alt"></i>
                            </div>

                            <h3>Qualified Doctors</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-ambulance"></i>
                            </div>

                            <h3>Emergency Cases</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>

                <div class="welcome-inner-content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-image">
                                <img src="assets/img/about-us-2.jpg" alt="about">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <span>About our medical</span>
                            <h3>Happiness is nothing more than good health and a bad memory</h3>
                            <p><?= $aboutBody ?></p>
                            <ul>
                                <li>Qualified Doctors</li>
                                <li>Outdoor Checkup</li>
                                <li>24/7 Help Center</li>
                                <li>Modern Clinic</li>
                                <li>Emergency Cases</li>
                                <li>Breast Screening</li>
                            </ul>
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome section -->
     
        <!-- Video Section -->
        <section class="video-section ptb-100"> 
            <div class="container"> 
                <div class="section-title white-title">
                    <h2>Watch Our Video</h2>
                    <p>We are ready to build your dream future Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                
                <div class="video-content mb-minus-330">
                    <div class="d-table"> 
                        <div class="d-tablecell">
                            <div class="sonar-wrapper">
                                <div class="sonar-emitter">
                                    <div class="sonar-wave"></div>
                                    <a href="https://www.youtube.com/watch?v=LFBxRxwY4Qw" class="play-video popup-youtube">
                                        <i class="icofont-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video Section -->
        
        <!-- Counter section -->
        <div class="counter-section pt-100 pb-70 pt-330">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-sm-6 col-md-6 col-lg-3"> 
                        <div class="single-counter">
                            <i class="icofont-simple-smile"></i>
                            <h3 class="counter"><?= $productsCount ?></h3>
                            <p>Products</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-3"> 
                        <div class="single-counter">
                            <i class="icofont-doctor-alt"></i>
                            <h3 class="counter"><?= $ordersCount ?></h3>
                            <p>Orders</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-3"> 
                        <div class="single-counter">
                            <i class="icofont-operation-theater"></i>
                            <h3 class="counter">1500</h3>
                            <p>Successful Operations</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-3"> 
                        <div class="single-counter">
                            <i class="icofont-bed"></i>
                            <h3 class="counter">2800</h3>
                            <p>Numbers of Beds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counter section -->
        
        <!-- Expert Doctors -->
        <section class="expert-doctors ptb-100 gray-bg pb-70"> 
            <div class="container"> 
                <div class="section-title">
                    <h2>Our Expert Doctors</h2>
                    <p>We are ready to build your dream future Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                
                <div class="expert-doctors-carousel owl-carousel owl-theme owl-theme-2">
                    <div class="single-card">
                        <div class="thumb-img">
                            <img src="assets/img/doctors/1.jpg" alt="Doctor Image" />
                            <div class="hover-social">
                                <div class="d-table">
                                    <div class="d-tablecell">
                                        <ul>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-linkedin"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caption-text text-center">
                            <h3>Dr. Anym Jackson</h3>
                            <span class="designation mb-10">Dental Specialist</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                    
                    <div class="single-card">
                        <div class="thumb-img">
                            <img src="assets/img/doctors/2.jpg" alt="Doctor Image" />
                            <div class="hover-social">
                                <div class="d-table">
                                    <div class="d-tablecell">
                                        <ul>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-linkedin"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caption-text text-center">
                            <h3>Dr. Mark Jacobson</h3>
                            <span class="designation mb-10">Cardiology</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                    
                    <div class="single-card">
                        <div class="thumb-img">
                            <img src="assets/img/doctors/3.jpg" alt="Doctor Image" />
                            <div class="hover-social">
                                <div class="d-table">
                                    <div class="d-tablecell">
                                        <ul>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-linkedin"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caption-text text-center">
                            <h3>Dr. Alex Davidson</h3>
                            <span class="designation mb-10">Haematology</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                    
                    <div class="single-card">
                        <div class="thumb-img">
                            <img src="assets/img/doctors/4.jpg" alt="Doctor Image" />
                            <div class="hover-social">
                                <div class="d-table">
                                    <div class="d-tablecell">
                                        <ul>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-linkedin"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                            </li>
                                            <li> 
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="caption-text text-center">
                            <h3>Dr. Jaka Alex</h3>
                            <span class="designation mb-10">Psychosocial</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Edn Expert Doctors -->

        <!-- Call To Action -->
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="call-to-action-text">
                            <i class="icofont-first-aid"></i>
                            <h3>Health Care Center</h3>
                            <p>if you have any Emerangcy by health problem contact this <span>No. 035 687 9514</span> or contact form</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <a href="#" class="default-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action -->
     
        <!-- Patient Feedback -->
        <section class="patient-feedback ptb-100"> 
            <div class="container"> 
                <div class="section-title">
                    <h2>Patient Feedback</h2>
                    <p>We are ready to build your dream future Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
             
                <div class="feedback-carousel owl-carousel owl-theme owl-theme-2">
                    <div class="single-feedback">
                        <div class="feedback-text">
                            <i class="icofont-quote-right"></i>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="profile-content">
                                <img src="assets/img/patient/1.jpg" alt="Patient" />
                                <h4>Anym Jackson</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-feedback">
                        <div class="feedback-text">
                            <i class="icofont-quote-right"></i>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="profile-content">
                                <img src="assets/img/patient/2.jpg" alt="Patient" />
                                <h4>Mark Rylance</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-feedback">
                        <div class="feedback-text">
                            <i class="icofont-quote-right"></i>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="profile-content">
                                <img src="assets/img/patient/3.jpg" alt="Patient" />
                                <h4>Natalie Portman</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-feedback">
                        <div class="feedback-text">
                            <i class="icofont-quote-right"></i>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="profile-content">
                                <img src="assets/img/patient/4.jpg" alt="Patient" />
                                <h4>Idris Elba</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-feedback">
                        <div class="feedback-text">
                            <i class="icofont-quote-right"></i>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <div class="profile-content">
                                <img src="assets/img/patient/5.jpg" alt="Patient" />
                                <h4>Scarlett Johansson</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Patient Feedback -->
        
        <!-- CTA Area -->
        <div class="cta-area gray-bg ptb-100">
            <div class="container"> 
                <div class="cta-text-content">
                    <h3>We are constantly evaluating and implementing ways to improve patient safety.</h3>
                    <p>Please speak up when you have questions or concerns.</p>
                    
                    <div class="cta-contant">
                        <i class="icofont-phone"></i>
                        1-604-555-5555
                    </div>
                </div>
                
                <div class="cta-doctor-img">
                    <img src="assets/img/doctor.png" alt="Doctor">
                </div>
            </div>
        </div>
        <!-- CTA Area -->
        
        <!-- Our Newsletter -->
        <section class="newsletter-section ptb-100"> 
            <div class="container"> 
                <div class="section-title white-title">
                    <h2>Join Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>

                <div class="subscribe-from">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter email" name="EMAIL" required autocomplete="off">
                        <button type="submit" class="btn submit-btn"><i class="icofont-location-arrow"></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Our Newsletter -->

<?php include("inc/footer.php");?>
		
