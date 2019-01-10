<?php
  require_once('../lib/connection.php');

  $title = $_POST['title'];
  $description = $_POST['description'];
  $id = $_POST['id'];
  require_once('filter.php');

  $sql = "
    UPDATE topic SET
    title = \"{$filtered['title']}\",
    description = \"{$filtered['description']}\",
    date = NOW() WHERE id ={$id}
  ";
  $result = mysqli_query($conn,$sql);
  if($result){
    header('Location:../index.php?id='.$id);
  }
  require_once('queryError.php');
 ?>
