<!DOCTYPE html>
<html lang="en">

<head>
  <title>DANG NHAP</title>  
<style>
     /* A little change in header */
 .header__cart {
  border: 1px solid red;
  border-radius: 4px;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  line-height: 14px;
  margin-left: 10px;
  padding: 5px 8px;
  width: 110px;
  height: 35px;
 }
 .header__cart:hover {
  background-color: red;
  transition: 1s;
 }
 .header__cart:hover i {
  color: #fff;
 }
 .header__cart:hover span {
  color: #fff;
 }
 .header__cart i {
  margin-right: 5px;
  font-size: 20px;
  color: black;
 }
 .header__cart span {
  color: black;
  font-size: 14px;
 }
 .header__cart i,
 .header__cart span {
  display: inline-block;
  vertical-align: middle;
 }
 .icon-cart {
  background-position: -175px 0;
  height: 18px;
  width: 20px;
 }
 .header__cart i,
 .header__cart span {
  display: inline-block;
  vertical-align: middle;
 }
</style>
  <?php 
    include('head.php');
  ?>
    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/dangnhap.css" type="text/css">

</head>
<body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">

        <form class="form-box" action="dangnhap.php" method="POST">
          <div class="header-text">Đăng nhập</div>
          <hr>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập e-mail" name="email" pattern="[A-z]+\.@[A-z0-9]+\.[A-z]{3}" title="something@gmail.com" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="psw" pattern="[A-z0-9]{3,15}" title="Mật khẩu phải từ 3 đến 15 kí tự" required>
          </div>

          <div class="bon">
            <button type="submit" class="btn">Đăng nhập</button>
          </div>
          <div class="signup-link">Chưa có tài khoản? <a href="dangky.php">Đăng ký ngay</a></div>
        </form>

    </div>

    <?php
    include('footer.php');
    ?>
    
</body>
</html>