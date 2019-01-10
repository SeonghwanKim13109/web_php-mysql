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
    require_once('select.php');

    echo "<h2>{$escaped_title}</h2>";
    echo $escaped_description;
  }
 ?>
