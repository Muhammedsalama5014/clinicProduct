<?php include("inc/header.php");?>
<?php
use Clinic\Classes\Models\Product;
$request = new \Clinic\Classes\Request();
$session = new \Clinic\Classes\Session();
$id = $request->get('id');
$products = new Product();
$product = $products->selectById($id, "product_name,product_desc,product_image,price");
?>

<form method="POST" action="<?=URL?>handlers/addOrder.php">
    <input type="hidden" name="product_id" value="<?=$id;?>">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>Order</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="<?=URL;?>index.php">Home</a></li>
                            <li>order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- details Section -->
        <section class="about-section ptb-100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="about-us-img">
                            <img src="<?=URL.'uploads/'.$product['product_image'];?>" alt="Product img" width="90%" height="500px">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <div class="about-us-text">

                            <h2><?=$product['product_name'];?></h2>
                            <p> <?=$product['product_desc'];?></p>
                            <h5><?=$product['price'];?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- End details section -->
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
        <!-- Appointment Area -->
        <div class="appointment-area">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-md-12 col-lg-12 p-0">
                        <div class="appointment-form">
                            <h2 class="title">Make an Appointment</h2>
                            <form>
                                <div class="row"> 
                                    <div class="col-md-4 col-lg-4 pr-10">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="id_name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-lg-4 pl-10">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="id_email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-lg-4 pr-10">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" id="id_phone_number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn book-now-btn">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
</form>

    <?php include("inc/footer.php");?>