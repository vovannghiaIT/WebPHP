<?php

use App\Models\Category;

$category = new Category(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $category->category_row($id);

$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => 0
);
$category->category_update($data, $id);
header("location: index.php?option=category");