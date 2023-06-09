<?php include("inc/header.php");?>
<?php $session = new \Clinic\Classes\Session();?>

   <form   method="POST" action="<?=URL;?>handlers/contact.php">


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
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col-md-12 offset-lg-3 col-lg-7">
                        <h3 class="title">Questions? Let our experts help!</h3>
                        <p>Team of Professionals</p>

                        <form >

                            <!-- start error validation -->
                            <?php if($session->has("errors")): ?>
                                <div class="alert alert-danger">
                                    <?php foreach($session->get("errors") as $error): ?>
                                        <p>
                                            <?= $error;?>
                                        </p>
                                    <?php endforeach; $session->remove("errors") ;?>
                                </div>
                            <?php else: ?>
                                <div>
                                </div>
                            <?php endif; ?>
                            <!-- end error validation -->
                            <div class="row"  id="contactForm">
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
                                    <input type="submit" name="submit" class="default-btn" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact section -->


   </form>
<?php include("inc/footer.php");?>