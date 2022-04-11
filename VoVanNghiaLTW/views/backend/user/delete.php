<?php


use App\Models\User;

$user = new User(); //tạo đối tượng
$id = $_REQUEST['id'];
//$row = $user->user_row($id);


$user->user_delete($id);
header("location: index.php?option=user&cat=trash");