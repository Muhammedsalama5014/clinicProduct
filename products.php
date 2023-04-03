<?php include("inc/header.php");?>
<?php
    use Clinic\Classes\Models\Product;
    $products = new Product();
    $product = $products->selectAll("id,product_name,product_desc,product_image,price");
    ?>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>Products</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="<?= URL;?>index.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Latest news section -->
        <section class="latest-news ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <?php foreach ($product as $prod): ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-card actical-card">
                                        <div class="thumb-img">
                                            <a href="#">
                                                <img src="assets/img/news/1.jpg" alt="News Image" />
                                            </a>
                                        </div>

                                        <div class="caption-text">
                                            <h3><a href="#"><?= $prod['product_name']?></a></h3>
                                            <p><?= $prod['product_desc']?></p>
                                            <h5>$<?= $prod['price']?></h5>
                                            <a href="<?=URL;?>make-order.php?id=<?=$prod['id'];?>" class="read-more">Make oreder<i class="icofont-swoosh-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <!--<div class="col-lg-12 col-md-12">
                                <div class="pagination-area">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-hand-drawn-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-hand-drawn-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>-->
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Latest news section -->

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
<?php include("inc/footer.php");?>