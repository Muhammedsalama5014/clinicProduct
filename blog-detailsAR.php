<?php use Clinic\Classes\Models\Blog;

include("inc/header.php");?>
<?php


if(isset( $_GET['id'] )){
    $blog = new Blog();
    $blog = $blog->selectById($_GET['id']);
} else {

}
?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <h2>Blog Details</h2>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area gray-bg ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                            <div class="article-img">
                                <img src="<?=URL . 'uploads/' .$blog['img'] ;?>" alt="blog-details" width="100%" height="450px">
                                <div class="date"><?=date("d" , strtotime($blog['created_at']))?> <br> <?=date("M" , strtotime($blog['created_at']))?></div>
                            </div>
                            
                            <div class="article-content">
                                <h3><?= $blog['title'] ;?></h3>

                                <p>
                                    <?= $blog['content'] ;?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="post-controls-buttons">
                            <div class="controls-left">
                                <a href="blog-details.php?id=<?php echo $blog['id'] - 1 ;?>"><i class="icofont-double-left"></i> Prev Post</a>
                            </div>

                            <div class="controls-right">
                                <a href="blog-details.php?id=<?php echo $blog['id'] + 1 ;?>">Next Post <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
        


<?php include("inc/footer.php");?>