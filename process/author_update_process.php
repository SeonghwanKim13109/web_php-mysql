<?php
  require_once('../lib/connection.php');
  $id = $_POST['id'];
  $name = $_POST['name'];
  $profile = $_POST['profile'];

  $sql = "
    UPDATE author SET
    name = \"{$name}\",
    profile = \"{$profile}\"
    WHERE id ={$id}
  ";
  $result = mysqli_query($conn,$sql);
  if($result){
    header('Location:../view/author.php?author=true');
  }
  require_once('queryError.php');
 ?>
