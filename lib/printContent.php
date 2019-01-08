<?php
  // echo "id = ".$id;
  // echo var_dump(isset($_GET['id']) );
  if(!isset($_GET['id'])){
    echo "<h2>Welcome</h2>";
    echo "welcome to php&mysql";
  }
  else{
    require_once('connection.php');
    //prevention sql injection
    $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "
      SELECT * FROM topic WHERE id={$filtered_id}
      ";
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    echo "<h2>{$row['title']}</h2>";
    echo $row['description'];
  }
 ?>
