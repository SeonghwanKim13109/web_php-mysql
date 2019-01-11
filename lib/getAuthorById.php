<?php
  require_once('connection.php');
  $sql ="
  SELECT * from topic join author where topic.id ={$id} and author_id = author.id
  ";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

?>
