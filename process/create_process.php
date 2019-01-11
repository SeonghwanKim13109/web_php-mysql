<?php
  // var_dump($_POST);
  $title = $_POST['title'];
  $description = $_POST['description'];
  $author = $_POST['author'];

  require_once('../lib/connection.php');
  $sql ="
    SELECT id FROM author
    WHERE name=\"{$author}\"
  ";
  
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $author_id = $row['id'];

  // echo $title;
  // echo $description;
  require_once('../lib/insert.php');
  header('Location: ../index.php');
 ?>
