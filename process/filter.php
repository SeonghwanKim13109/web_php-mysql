<?php
  $filtered = array(
    'title'=>mysqli_real_escape_string($conn,
    $title),
    'description'=>mysqli_real_escape_string(
      $conn,$description
    )
  );
?>
