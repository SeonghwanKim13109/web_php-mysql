<?php require_once('view/upper.php');?>
  <ol>
<?php require_once('lib/printList.php'); ?>
  </ol>
<?php
  require_once('lib/getAuthor.php');
  $result = mysqli_query($conn,$sql);
?>
  <form
  action="process/create_process.php" method="post">
    <p> <input type="text" name="title" placeholder="title"> </p>
    <p> <textarea name="description" rows="8" cols="80" placeholder="text"></textarea> </p>
    <p>
      <select name="author">
        <?php
        while($row = mysqli_fetch_array($result)){
          echo "<option value=\"{$row['name']}\">{$row['name']} </option>";
          //value에 {$row['id']}를 넣으면 쉬워진다
        }
        ?>
      </select>
      <input type="submit">
    </p>
  </form>
<?php require_once('view/bottom.php'); ?>
