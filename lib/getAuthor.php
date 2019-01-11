<?php
  require_once('connection.php');
  $sql ="
  SELECT * from author
  ";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
?>
