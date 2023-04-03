<?php include("inc/header.php");?>
<?php
use Clinic\Classes\Models\Product;
$products = new Product();
$product = $products->selectLimit("id,product_name,product_desc,product_image,price", 3);

?>

<!-- Hero Slider -->
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hs-item hs-item-bg1">
                <div class="d-table"> 
                    <div class="d-tablecell"> 
                        <div class="hero-text text-center">
                            <h1>We Always Care Your <br> Health</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hs-item hs-item-bg2">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="hero-text text-center">
                            <h1>Best Care & Better <br> Doctor</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hs-item hs-item-bg3">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="hero-text text-center">
                            <h1>We Always Care Your <br> Health</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Slider -->
        
        <!-- Services -->
        <div class="services-area services-box">
            <div class="container"> 
                <div class="row"> 
                    <?php foreach ($product as $prod): ?>
                    <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-0"> 
                        <div class="single-card">
                            <div class="thumb-img">
                                <img src="assets/img/services/3.jpg" alt="Service Image" />
                            </div>
                            
                            <div class="caption-text text-center">
                                <h3> <a href="<?=URL;?>make-order.php?id=<?=$prod['id'];?>"><?= $prod['product_name']?></a></h3>
                                <p><?= $prod['product_desc']?></p>
                                <h5>$<?= $prod['price']?></h5>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Services -->
        
        <!-- About Section -->
        <section class="about-section ptb-100"> 
            <div class="container"> 
                <div class="row justify-content-center align-items-center"> 
                    <div class="col-md-12 col-lg-6"> 
                        <div class="about-us-img">
                            <img src="assets/img/about-us.jpg" alt="About Us Image">
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6"> 
                        <div class="about-us-text">
                            <h2>50 Years of Experience in Medical</h2>
                            
                            <p>We are ready to build your dream future Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, beatae.</p>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abveritatis quasi architecto beatae vitae dicta sunt explicabo.</p>
                            
                            <a href="#" class="default-btn">About Us</a>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- End about section -->

        <!-- Call To Action -->
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="call-to-action-text">
                            <i class="icofont-first-aid"></i>
                            <h3>Health Care Center</h3>
                            <p>if you have any Emerangcy by health problem contact this <span>No. 035 687 9514</span> or contact form</p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-3">
                        <a href="#" class="default-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action -->
        

<?php include("inc/footer.php");?>
