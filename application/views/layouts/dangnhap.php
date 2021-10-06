<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DANG NHAP</title>
  <link rel="shortcut icon" type="image" href="public/assets/images/cropped-mona-180x180.png">
  <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="public/assets/css/homepages/dangnhap.css">
  <script type="text/javascript" src="public/assets/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="public/assets/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/assets/js/myScript.js"></script>
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