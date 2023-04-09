<?php
require_once("../../app.php");
use Clinic\Classes\Models\Blog;
use Clinic\Classes\Validation\Validator;
use Clinic\Classes\File;

$request = new \Clinic\Classes\Request();
$session = new \Clinic\Classes\Session();
if($request->postHas('submit')){
    $id = $request->post('id');
    $title = $request->post('title');
    $desc = $request->post('desc');
    $img = $request->files('img');
//validation
    $validator =new Validator;
    $validator->validate('title' , $title ,['required' , 'str' , 'max' ]);
    $validator->validate('description' , $desc ,['required' , 'str' ]);
   if($img['error'] == 0){
        $validator->validate('image' , $img ,[ 'image' ]);
    }

    if($validator->hasErrors()){
        $session->set('errors' , $validator->getErrors());
        $request->aredirect("blog-en.php");
    }else{

        //لازم الاول نجييب اسم الصورة القديمة علشان او هنغيرها او نسيبها
        $blog =new Blog();
        $imgName = $blog->selectById($id,'img')['img'];

        if ($img['error'] ==0){
            unlink(PATH . "uploads/$imgName");
            $file = new File($img);
            $imgName = $file->rename()->upload();

        }


        $blog->update("title = '$title', content ='$desc', img = '$imgName'",$id);

        $session->set('success' , 'product updated successfully');
        $request->aredirect("blog-en.php");

    }
}else{
    $request->aredirect("blog-en.php");
}

?>