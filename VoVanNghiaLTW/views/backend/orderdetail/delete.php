<?php


use App\Models\Orderdetail;

$orderdetail = new Orderdetail(); //tạo đối tượng
$id = $_REQUEST['id'];
//$row = $orderdetail->orderdetail_row($id);


$orderdetail->orderdetail_delete($id);
header("location: index.php?option=orderdetail&cat=trash");