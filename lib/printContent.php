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

    $escaped_title =htmlspecialchars($row['title']);

    $escaped_description = htmlspecialchars($row['description']);

    echo "<h2>{$escaped_title}</h2>";
    echo $escaped_description;
  }
 ?>
