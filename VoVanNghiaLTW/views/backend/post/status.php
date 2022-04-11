<?php


use App\Models\Post;

$post = new Post(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $post->post_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => $new_status
);
$post->post_update($data, $id);
header("location: index.php?option=post");