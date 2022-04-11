<?php


use App\Models\Topic;

$topic = new Topic(); //tạo đối tượng
$id = $_REQUEST['id'];
$row = $topic->topic_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
  'updated_at' => date('Y-m-d H:i:s'),
  'updated_by' => 1,
  'status' => $new_status
);
$topic->topic_update($data, $id);
header("location: index.php?option=topic");