<?php

use App\Models\Product;

$product = new Product(); //tạo đối tượng
$id = $_REQUEST['id'];
//$row = $product->product_row($id);


$product->product_delete($id);
header("location: index.php?option=product&cat=trash");