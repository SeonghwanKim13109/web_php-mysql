<?php
  require_once('view/upper.php');
  require_once('lib/printList.php');
 ?>
  </ol>
<?php
  require_once('view/manupulate.php');
  require_once('lib/select.php');
 ?>

 <form action="process/update_process.php" method="post">
   <input type="hidden" name="id" value="<?=$_GET['id']?>">
   <p><input type="title" name="title" value="<?=$escaped_title?>"></p>
   <p> <textarea name="description" rows="8" cols="80"><?=$escaped_description?></textarea> </p>
   <p> <input type="submit"> </p>
 </form>
