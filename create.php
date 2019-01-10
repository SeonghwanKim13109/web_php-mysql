<?php
  require_once('view/upper.php');
  require_once('lib/printList.php');
?>
  <form
  action="process/create_process.php" method="post">
    <p> <input type="text" name="title" placeholder="title"> </p>
    <p> <textarea name="description" rows="8" cols="80" placeholder="text"></textarea> </p>
    <p> <input type="submit"> </p>
  </form>
<?php require_once('view/bottom.php'); ?>
