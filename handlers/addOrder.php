<?php require_once("../app.php");
use Clinic\Classes\Validation\Validator;
use Clinic\Classes\Models\Order;


$request = new \Clinic\Classes\Request();
$session = new \Clinic\Classes\Session();
if($request->postHas("submit")){

 $name  = $request->post("name");
 $email  = $request->post("email");
 $phone  = $request->post("phone");
 $id = $request->post("product_id");

 //validations 
 $validator = new Validator;
 $validator->validate('name' , $name ,['required' , 'str','max']);
 $validator->validate('email' , $email ,[ 'required' ,'email','max']);
 $validator->validate('phone' , $phone ,[ 'required','numeric','max']);

 if($validator->hasErrors()){
    $session->set('errors' , $validator->getErrors());
    $request->redirect("make-order.php?id=$id");
 }else{
    $order = new Order;
    $orderId = $order->insertAndGetId("product_id,user_name,email,phone","'$id','$name' ,  $email ,'$phone'");

    $request->redirect("products.php");
 }



}