<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DANG KY</title>
  <link rel="shortcut icon" type="image" href="images/cropped-mona-180x180.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/dangky.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myScript.js"></script>
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