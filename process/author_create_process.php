<?php
  // var_dump($_POST);
  $name = $_POST['name'];
  $profile = $_POST['profile'];

  // echo $title;
  // echo $description;
  require_once('../lib/insertAuthor.php');
  header('Location: ../view/author.php?author=true');
 ?>
