<?php



use App\Models\User;

$user = new User(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $user->user_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => $new_status
);
$user->user_update($data, $id);
header("location: index.php?option=user");