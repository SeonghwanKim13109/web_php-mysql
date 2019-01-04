<?php
  require_once('connection.php');
  //2. select query
  $sql = "SELECT * FROM topic LIMIT 20";
  $result = mysqli_query($conn, $sql);
  //var_dump($result);

  //mysqli_fetch_array는 실행 할 때 마다 하나의 row씩 fetch한다 -> 반복문으로 전체 접근
  //더 이상 fetch할게 없을 때는 NULL을 반환

  while($row = mysqli_fetch_array($result)){

    echo "<li><a href = \"index.php?id="
    .$row['id']."\">".$row['title']."</a></li>";
  }

  //print_r($row);
  //echo $row['title']; 이런 것을 연관 배열이라 한다
  require_once('queryError.php');
 ?>
