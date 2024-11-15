<?php
      include "db.php";
      $this_name = $_GET['this_name'];
      echo $this_name;
      $sql = "DELETE FROM products WHERE name='$this_name'";
      mysqli_query($conn,$sql);
      header('location:index.php');
?>