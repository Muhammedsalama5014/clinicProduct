<?php include("inc/header.php");?>
  <?php
  use Clinic\Classes\Models\Setting;
  use Clinic\Classes\Models\Product;
  use Clinic\Classes\Models\Order;

  $setting = new Setting();
  $aboutData = $setting->selectAll();
  $aboutHeader = $setting->getAboutHeader();
  $aboutBody = $setting->getAboutBody();
  $aboutTitle = $setting->getAboutTitle();
  $aboutWelcome = $setting->getAboutWelcome();
  $aboutImage = $setting->getAboutImage();

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
                            <li><a href="<?=URL;?>index.php">Home</a></li>
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
                    <h2><?= $aboutWelcome ?></h2>
                    <p><?= $aboutHeader ?></p>
                </div>
                

                <div class="welcome-inner-content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-image">
                                <img src="<?=URL . 'uploads/' . $aboutImage;?>" alt="about">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h3><?= $aboutTitle ?></h3>
                            <p><?= $aboutBody ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome section -->

        <!-- Counter section -->
        <div class="counter-section ">
            <div class="container justify-content-center">
                <div class="row"> 
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="single-counter">
                            <i class="icofont-simple-smile"></i>
                            <h3 class="counter"><?= $productsCount ?></h3>
                            <p>Products</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="single-counter">
                            <i class="icofont-doctor-alt"></i>
                            <h3 class="counter"><?= $ordersCount ?></h3>
                            <p>Orders</p>
                        </div>
                    </div>
                    

                    

                </div>
            </div>
        </div>
        <!-- End counter section -->



<?php include("inc/footer.php");?>
		
