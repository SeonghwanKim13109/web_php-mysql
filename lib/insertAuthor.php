<?php
  require_once('connection.php');

  $sql = "
  INSERT INTO author
     (name, profile)
       VALUES (\"{$name}\"
       , \"{$profile}\"
       )";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
  // echo $result;
  require_once('queryError.php');
 ?>
