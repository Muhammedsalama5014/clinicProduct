
<?php


require_once("../../app.php");
use Clinic\Classes\Models\Blog;
$request = new \Clinic\Classes\Request();

if($request->getHas('id')){
    $id =  $request->get('id');

    $blog = new Blog();
    $blog->delete($id);
    $request->aredirect("blog-en.php");
}
