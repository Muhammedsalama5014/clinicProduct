<?php
require_once("app.php");

use Clinic\Classes\Models\Product;

$products = new Product();
$product = $products->selectById(2, "product_name,product_desc,product_image,price");


echo "<pre>";
print_r($product);
echo"</pre>";
?>