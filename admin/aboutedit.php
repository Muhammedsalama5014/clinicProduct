<?php include('inc/header.php'); ?>
<?php
use Clinic\Classes\Models\Blog;
$request = new \Clinic\Classes\Request();
if($request->getHas('id')){
    $id = $request->get('id');
    $blog = new Blog();
    $blogs = $blog->selectById($id);
}else{
    $request->aredirect("blog-en.php");
}


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
                            <h3>Blog Edit</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php"><i data-feather="home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Blog</li>
                                <li class="breadcrumb-item active">Blog Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?=AURL;?>handler/blog-edit.php" class="form theme-form projectcreate" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$blogs['id'];?>">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog Name</label>
                                                <input class="form-control" name="title" type="text" placeholder="project name *" value="<?=$blogs['title']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Description</label>
                                            <div id="editor_container">
                                                <textarea class="textarea" name="desc" id="editable"><?=$blogs['content']?></textarea>
                                            </div>
                                            <div id="html_container"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Blog Internal Image</label>
                                                <input class="form-control" name="img" type="file" value="<?=$blogs['img']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button type="submit" name="submit" class="btn btn-danger" href="#">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
<?php include('inc/footer.php'); ?>