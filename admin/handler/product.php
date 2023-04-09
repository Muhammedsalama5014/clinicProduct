<?php
require_once("../../app.php");
use Clinic\Classes\Models\Blog;
use Clinic\Classes\Validation\Validator;
use Clinic\Classes\File;
$request = new \Clinic\Classes\Request();
$session = new \Clinic\Classes\Session();

if($request->postHas('submit')){
    $title = $request->post('title');
    $desc = $request->post('desc');
    $img = $request->files('img');

//validation

    $validator =new Validator;
    $validator->validate('title' , $title ,['required' , 'str' , 'max' ]);
    $validator->validate('description' , $desc ,['required' , 'str' ]);
    $validator->validate('image' , $img ,['requiredfile' , 'image' ]);


    if($validator->hasErrors()){
        $session->set('errors' , $validator->getErrors());
        $request->aredirect("blogcreate-en.php");
    }else{
        // upload img
        $file = new File($img);
        $imgUploadName =  $file->rename()->upload();

        //db query

        $blog =new Blog();
        $blog->insert("title , content , img","'$title','$desc', '$imgUploadName'");

        $session->set('success' , 'product added successfully');
        $request->aredirect("blog-en.php");

    }
}else{
    $request->aredirect("blog-en.php");
}