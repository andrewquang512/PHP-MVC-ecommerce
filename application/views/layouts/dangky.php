<!DOCTYPE html>
<html lang="en">

<head>
  <title>DANG KY</title>
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
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/dangky.css" type="text/css">
</head>
<body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">

        <form action="dangky.php" class="form-box" method="POST">
          <h2 class="header-text">Đăng ký</h2>
          <p>Điền thông tin vào các ô để tạo tài khoản</p>
          <hr>

          <div class="form-group">
            <div class="row">
              <div class="col"><input type="text" class="form-control" name="First_name" placeholder="Họ" required="required"></div>
              <div class="col"><input type="text" class="form-control" name="Last_name" placeholder="Tên" required="required"></div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập e-mail" name="email" pattern="[A-z]+\.@[A-z0-9]+\.[A-z]{3}" title="something@gmail.com" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="psw" pattern="[A-z0-9]{3,15}" title="Mật khẩu phải từ 3 đến 15 kí tự" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Xác nhận mật khẩu" name="confirm_psw" pattern="[A-z0-9]{3,15}" required>
          </div>

          <div class="form-group">
            <label class="term"><input type="checkbox" required="required"> Tôi đồng ý với các <a href="#">Điều khoản sử dụng</a> và <a href="#">Chính sách bảo mật</a></label>
          </div>
          <div class="bon">
            <button type="submit" class="btn">Đăng ký</button>
          </div>

          <div class="signup-link">Đã có tài khoản? <a href="dangnhap.php">Đăng nhập tại đây</a></div>
        </form>

    </div>

    <?php
    include('footer.php');
    ?>
</body>
</html>