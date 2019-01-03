<?php
  // var_dump($_POST);
  $title = $_POST['title'];
  $description = $_POST['description'];
  // echo $title;
  // echo $description;
  require_once('../insert.php');
  header('Location: ../index.php');
 ?>
