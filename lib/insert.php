<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];
  require_once('connection.php');
//2.
  // require_once('process/create_process');
  $filtered = array(
    'title'=>mysqli_real_escape_string($conn,
    $title),
    'description'=>mysqli_real_escape_string(
      $conn,$description
    )
  );

  $sql = "
  INSERT INTO topic
     (title, description, date)
       VALUES (\"{$filtered['title']}\"
       , \"{$filtered['description']}\"
       , NOW()
       )";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
  // echo $result;
  require_once('queryError.php');
 ?>
