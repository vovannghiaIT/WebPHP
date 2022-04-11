<?php


use App\Models\Topic;

$topic = new Topic(); //tạo đối tượng
$id = $_REQUEST['id'];
//$row = $topic->topic_row($id);


$topic->topic_delete($id);
header("location: index.php?option=topic&cat=trash");