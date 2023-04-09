<?php
require_once("../../app.php");
use Clinic\Classes\Models\Admin;
use Clinic\Classes\Validation\Validator;
$request = new \Clinic\Classes\Request();
$session = new \Clinic\Classes\Session();

if($request->postHas('submit')){
    $id = $_SESSION['adminId'];
    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');

//validation

    $validator =new Validator;
    $validator->validate('Name' , $name ,['required' , 'str' , 'max' ]);
    $validator->validate('Email' , $email ,['required' , 'email' , 'max' ]);
    if (! empty($password)){
        $validator->validate('Password' , $password ,['str' , 'max' , 'min' ]);
    }

    if($validator->hasErrors()){
        $session->set('errors' , $validator->getErrors());
        $request->aredirect("teamedite-en.php");
    }else{
if(! empty($password)){
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $admin =new Admin();
    $admin->update("name = '$name', email ='$email', password = '$hashpass'",$id);
    $request->aredirect("team-en.php");

}else
        $admin =new Admin();
        $admin->update("name = '$name', email ='$email'",$id);
        $request->aredirect("team-en.php");

    }
}else{
    $request->aredirect("team-en.php");
}
