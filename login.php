<?php
    include "connect.php";
    session_start();
    if( isset($_SESSION['mySession'])){
        header('location:index.php');
    }


    if(isset($_POST['dangnhap'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       $sql = "SELECT * FROM taikhoan WHERE username='$username' and password='$password' ";
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) == 1){
         $_SESSION['mySession'] = $username;
         header("location:index.php");
       }
       else{
        echo "tài khoản hoặc mật khẩu sai";
       }
    }
?>
<form action="login.php" method="post">
<label> username</label>
<input type="text" name="username">
<label> password</label>
<input type="password" name="password">
<button type="submit" name="dangnhap"> Đăng nhập </button>
</form>