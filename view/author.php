<?php
  require_once('upper.php');
 ?>
 <table>
   <thead>
     <tr> <!-- table row -->
       <th>id</th><!--column name -->
       <th>name</th>
       <th>profile</th>
       <th>modify</th>
       <th>delete</th>
     </tr>
   </thead>
   <tbody>
     <?php
        require_once('../lib/getAuthor.php');
        // echo var_dump($row);
        while($row = mysqli_fetch_array($result)){
          echo "
          <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['profile']}</td>
            <td><a href=\"author.php?author=true&id={$row['id']}\">update</a></td>
            <td><a href=\"author.php?author=true&delete=true&id={$row['id']}\">delete</a></td>
            !--
              <form action=\"author_delete_process.php\" method=\"post\" onsubmit=\"if(!confirm(\"sure?\")){return false;};\">
                 <input type=\"hidden\" name=\"id\" value=\"{$row['id']}\">
                 <input type=\"submit\" value =\"delete\">
              </form>
            -->

          </tr>
            ";
        }
      ?>
   </tbody>
 </table>
 <?php
  $name = "";
  $profile ="";
  $id =$_GET['id'];
  $form_action="../process/author_create_process.php";
  if(isset($_GET['id'])){
      $sql = "
        SELECT * FROM author
        WHERE id = {$id}
      ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $name = $row['name'];
      $profile =$row['profile'];
      $form_action="../process/author_update_process.php";
  }
  if(isset($_GET['delete'])){
    $form_action="../process/author_delete_process.php";
  }
 ?>
 <form action="<?=$form_action?>"method="post">
   <input type="hidden" name="id" value="<?=$id?>">
  <?php
    if(!isset($_GET['delete'])){
   ?>
  <p><input type="text" name="name" value="<?=$name?>"></p>
  <p> <textarea name="profile" rows="8" cols="80" placeholder="profile"><?=$profile?></textarea> </p>
  <p><input type="submit" name=""></p>
  <?php
    }
    else{
      ?>
    <input type="submit" name="check" value="yes">
    <input type="submit" name="check" value="no">
  <?php
    }
  ?>
 </form>
