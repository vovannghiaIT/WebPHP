<?php

use App\Models\Product;

$product = new Product(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $product->product_row($id);

$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => 0
);
$product->product_update($data, $id);
header("location: index.php?option=product");