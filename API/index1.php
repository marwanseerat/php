<?php
header("Content-Type:application/json");
include ('./connect.php');

$sql = "SELECT * FROM employees ";
$result = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_assoc($result)){
    $arr['id']= $row["emp_id"];
    $arr['name']= $row["emp_name"];
    $arr['email']=$row['emp_email'];
    $arr['salary']=$row['emp_salary'];
    $arr['department']=$row['emp_department'];
 }

 echo json_encode($arr);
?>