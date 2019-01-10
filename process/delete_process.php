<?php
  $check = $_POST['check'];
  $id = $_POST['id'];

  if($check == 'yes'){
    require_once('../lib/connection.php');

    $filtered_id = mysqli_real_escaped_string($conn,$id);
    $integer_id = settype($filtered_id,'integer');

    $sql ="
    DELETE FROM topic
    WHERE id ={$integer_id}
    ";

    $result = mysqli_query($conn,$sql);
    if($result){
      header('Location:../index.php');
    }
    
    require_once('../lib/queryError.php');
  }

  else if($check == 'no'){
    header('Location:../index.php?id='.$id);
  }
?>
