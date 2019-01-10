<a href="../create.php">create</a>
 <?php
  if(isset($_GET['id'])){
 ?>
    <a href="../update.php?id=<?=$_GET['id']?>"> modify </a>
    <a href="../delete.php?id=<?=$_GET['id']?>">delete</a>
 <?php
  }
?>
