<?php include('inc/header.php'); ?>
<?php
use Clinic\Classes\Models\Blog;
 $blog =new Blog();
 $blogs = $blog->selectAll();
$session =new \Clinic\Classes\Session();

?>

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('inc/side-bar.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Blog</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid user-card">
                <div class="row">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 p-0"></div>
                                <div class="col-md-6 p-0">
                                    <div class="form-group mb-0 me-0"></div>
                                    <a class="btn btn-primary" href="blogcreate-en.php"> <i
                                            data-feather="plus-square"> </i>Create New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-100">
                        <div class="row">
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
                            <?php foreach ($blogs as $blog) :?>
                            <div class="col-xl-12 col-sm-6">
                                <div class="card pb-2 pt-2">
                                    <div class="blog-box blog-list row">
                                        <div class="col-xl-5 col-12"><img class="img-fluid sm-100-w" src="<?=URL . 'uploads/' . $blog['img']?>" alt="" style="height: 400px">
                                        </div>
                                        <div class="col-xl-7 col-12">
                                            <div class="blog-details">
                                                <div class="blog-date"><span><?=date("d" , strtotime($blog['created_at']))?></span> <?=date("M, Y  h:i a" , strtotime($blog['created_at']))?></div>
                                                <a href="#">
                                                    <h6><?=$blog['title']?> </h6></a>
                                                <div class="blog-bottom-content">
                                                    <ul class="blog-social">
                                                        <li><?=substr($blog['content'], 0, 300) ;?>......</li>
                                                    </ul>
                                                    <hr>
                                                    <div>
                                                        <a class="btn btn-primary" href="<?=AURL . 'blogedit-en.php?id=' . $blog['id'];?>">Edit</a>
                                                        <a class="btn btn-danger" href="<?=AURL . 'handler/remove-blog.php?id=' . $blog['id'];?>">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php include('inc/footer.php'); ?>