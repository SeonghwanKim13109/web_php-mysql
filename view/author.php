<?php
  require_once('upper.php');
 ?>
 <table>
   <thead>
     <tr> <!-- table row -->
       <th>id</th><!--column name -->
       <th>name</th>
       <th>profile</th>
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
          </tr>
            ";
        }
      ?>
   </tbody>
 </table>
