<?php
use Clinic\Classes\Models\Setting;
$setting = new Setting();
$aboutBody = $setting->getAboutBody();
$aboutTitle = $setting->getAboutTitle();
?>

<!-- Call To Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="call-to-action-text">
                    <i class="icofont-first-aid"></i>
                    <h3>Health Care Center</h3>
                    <p>if you have any Emerangcy  problem please contact us form</p>
                </div>
            </div>

            <div class="col-lg-3">
                <a href="<?=URL;?>contact.php" class="default-btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action -->
<!-- Footer -->
<footer class="pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="footer-widget">
                    <a href="#" class="footer-logo">
                        <h3><?= $aboutTitle ?></h3>
                    </a>

                    <p><?= substr($aboutBody, 0, 250) ; ?>..... </p>

                    <ul class="socials-links">
                      <a href="<?=URL;?>about.php" class="btn btn-primary">about us</a>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 offset-lg-1  col-lg-2">
                <div class="footer-widget">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="<?=URL;?>index.php">Home</a></li>
                        <li><a href="<?=URL;?>products.php">products</a></li>
                        <li><a href="<?=URL;?>about.php">About</a></li>
                        <li><a href="<?=URL;?>blog.php">Blog</a></li>
                        <li><a href="<?=URL;?>contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 offset-lg-1 col-lg-3">
                <div class="footer-widget">
                    <h3>Contact Us</h3>
                    <p>If  you have any questions or problems please contact us</p>
                    <a href="<?=URL;?>contact.php" class="btn btn-primary">contact us</a>
                </div>
            </div>
        </div>

        <div class="separate-line"></div>

        <div class="row bottom-footer">
            <div class="col-md-6 col-lg-6">
                <p>Copyright @ 2023, smarttarget. All rights reserved.</p>
            </div>
            <!--<div class="col-md-6 col-lg-6">
                <ul>
                    <li><a href="#">Privac Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>-->
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Jquery Min JS -->
<script data-cfasync="false" src="<?= URL;?>../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="<?= URL;?>assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="<?= URL;?>assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="<?= URL;?>assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="<?= URL;?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Jquery UI JS -->
<script src="<?= URL;?>assets/js/jquery.ui.js"></script>
<!-- ajaxChimp Min JS -->
<script src="<?= URL;?>assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="<?= URL;?>assets/js/form-validator.min.js"></script>
<!-- Contact Form JS -->
<script src="<?= URL;?>assets/js/contact-form-script.js"></script>
<!-- Main JS -->
<script src="<?= URL;?>assets/js/script.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/promedi/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 14:27:59 GMT -->
</html>