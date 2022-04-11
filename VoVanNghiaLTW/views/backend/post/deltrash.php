<?php


use App\Models\Post;

$post = new Post(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $post->post_row($id);

$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => 0
);
$post->post_update($data, $id);
header("location: index.php?option=post");