<?php
      include "db.php";
      if(isset($_POST['btn'])){
     $name =$_POST['name'];
     // chỉ lấy tên hình ảnh để gửi lên db
     $image =$_FILES['hinhanh']['name'];
     // lấy đường dẫn của ảnh
     $image_tmp_name = $_FILES['hinhanh']['tmp_name'];
     $price = $_POST['price'];
     $sql = "INSERT INTO products (name, image, price)
     VALUE('$name' , '$image' , '$price')";
     mysqli_query($conn, $sql);
     move_uploaded_file($image_tmp_name , 'img/anhquat/'. $image);
      }

?>
<form action="add_product.php" method="post" enctype="multipart/form-data">
    <p> Name </p>
    <input type="text" name="name">
    <p> image </p>
    <input type="file" name="hinhanh">
    <p> price </p>
    <input type="text" name="price">
    <br>
    <button id="submit" name="btn"> Gửi </button>
</form>
