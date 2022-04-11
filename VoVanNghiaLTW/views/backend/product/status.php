<?php

use App\Models\Product;

$product = new Product(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $product->product_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => $new_status
);
$product->product_update($data, $id);
header("location: index.php?option=product");