<?php


use App\Models\Post;

$post = new Post(); //tạo đối tượng
$id = $_REQUEST['id'];
//$row = $post->post_row($id);


$post->post_delete($id);
header("location: index.php?option=post&cat=trash");