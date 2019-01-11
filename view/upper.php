<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
    <style media="screen">
      table{
        width: 100%;
      }
      table, th, td {
        border: 1px solid #bcbcbc;
      }
      td{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php if(!isset($_GET['author'])){
    ?>
    <h1> <a href="index.php">WEB</a></h1>
    <a href="view/author.php?author=true">author</a>
    <?php
      }
      else{
    ?>
    <h1> <a href="../index.php">WEB</a></h1>
    <a href="../index.php">topic</a>
    <?php
      }
    ?>
