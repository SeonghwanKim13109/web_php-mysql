<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];

//1. connection
$conn = mysqli_connect("localhost","root","show13109","phpsql");
//2.
$sql = "
INSERT INTO topic
(title, description, date)
VALUES ('MySql','MySql is ...', NOW())";
mysqli_query($conn,$sql);
 ?>
