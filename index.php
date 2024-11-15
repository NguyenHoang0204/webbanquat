<?php
   session_start();
   if(!isset($_SESSION['mySession'])){
    header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Quạt Máy</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Cửa Hàng Quạt Máy</h1>
        <nav>
            <ul>
                <li><a href="#home">Trang Chủ</a></li>
                <li><a href="#products">Sản Phẩm</a></li>
                <li><a href="#contact">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <h2>Chào Mừng Đến Với Cửa Hàng Chúng Tôi</h2>
        <p>Khám phá bộ sưu tập quạt máy chất lượng cao của chúng tôi.</p>
    </section>

    <section id="products">
        <h2>Sản Phẩm</h2>
        <thead>
            <tr>
                <th>Tên sản phẩm </th>
                <th>Hình ảnh </th>
                <th> Giá </th>
                <th>Thêm vào giỏ hàng </th>
            </tr>
        </thead>
        <tbody>
           <?php
                include "db.php";
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <br>
                    <tr>
                        <td> <?php echo $row['name'] ?> </td>
                        <td><img width="60" height="80" src="img/anhquat/<?php echo $row['image'] ?>" alt=""></td>
                        <td><?php echo $row['price'] ?> </td>
                        <td> <a href="index.php" class="btn btn-danger btn-sm">Thêm vào giỏ hàng </a> </td>
                        <span> <a href="delete.php?this_name=<?php echo $row['name'] ?>"> Xoá </a></span>
                    </tr>
           <?php } ?> 
        </tbody>
    </section>
    <section id="contact">
        <h2>Liên Hệ</h2>
        <p>Email: lienhe@quathang.com</p>
        <p>Điện thoại: 0123 456 789</p>
    </section>

    <footer>
        <p>&copy; 2024 Cửa Hàng Quạt Máy. Tất cả quyền được bảo lưu.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<a href="logout.php">
  <button type="submit" name="dang xuat"> Đăng xuất </button>
</a>