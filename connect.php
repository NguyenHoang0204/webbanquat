<?php
    $sever='localhost';
    $user='root';
    $pass='';
    $database='admin';
 
  $conn= new mysqli($sever, $user, $pass, $database);
   if($conn)
   {
    mysqli_query($conn," SET NAMES 'utf8' ");
   }
   else
   {
    echo ' Kết nối thất bại ';
   }
?>