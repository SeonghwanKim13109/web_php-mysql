<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];
  require_once('connection.php');
//2.
  // require_once('process/create_process');

  require_once('../process/filter.php');

  $sql = "
  INSERT INTO topic
     (title, description, date, author_id)
       VALUES (\"{$filtered['title']}\"
       , \"{$filtered['description']}\"
       , NOW(), \"{$author_id}\"
       )";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
  // echo $result;
  require_once('queryError.php');
 ?>
