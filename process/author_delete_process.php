<?php
  $check = $_POST['check'];
  $id = $_POST['id'];

  if($check == 'yes'){
    require_once('../lib/connection.php');

    $sql ="
    DELETE FROM author
    WHERE id ={$id}
    ";

    $result = mysqli_query($conn,$sql);

    require_once('../lib/queryError.php');
  }

    header('Location:../view/author.php?author=true');

?>
