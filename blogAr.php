<?php include("inc/header.php"); ?>
<?php

use Clinic\Classes\Models\Blog;

$b = new Blog();
$blogs = $b->selectAll();

?>

    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <h2>Blog</h2>
                </div>

                <div class="col-md-6 col-lg-5">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
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

                        <?php foreach ($blogs as $blog): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-card actical-card">
                                    <div class="thumb-img" style="height:510px">
                                        <a href="blog-details.php?id=<?php echo $blog['id'] ?>">
                                            <img src="<?=URL . 'uploads/' .$blog['img'] ;?>" alt="blog Image" width="100%" height="500px"/>
                                        </a>
                                    </div>

                                    <div class="caption-text">
                                        <h3><a href="blog-details.php?id=<?php echo $blog['id'] ?>"><?php echo $blog['title'] ?></a></h3>

                                        <ul class="meta-tag">
                                            <li><?=date("d M, Y  h:i a" , strtotime($blog['created_at']))?></li>
                                        </ul>

                                        <p><?php echo substr($blog['content'], 0, 150) ?></p>

                                        <a href="blog-details.php?id=<?php echo $blog['id'] ?>" class="read-more">Read More <i class="icofont-swoosh-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>


                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                        class="icofont-hand-drawn-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                        class="icofont-hand-drawn-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Latest news section -->


<?php include("inc/footer.php"); ?>