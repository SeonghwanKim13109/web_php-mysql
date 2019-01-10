<?php
  $filtered_id = htmlspecialchars($_GET['id']);
  $sql = "
    SELECT * FROM topic WHERE id={$filtered_id}
    ";
  // echo $sql;
  $result = mysqli_query($conn,$sql);
  require_once('queryError.php');

  $row = mysqli_fetch_array($result);

  $escaped_title =htmlspecialchars($row['title']);

  $escaped_description = htmlspecialchars($row['description']);
 ?>
