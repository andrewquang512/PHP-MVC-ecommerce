<?php 
    if(!isset($_SESSION)) { 
      session_start(); 
    }
?>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light   " id="navbar">

        <a class="navbar-brand text-center col-3  ml-auto" href="index.php">
            <img width="120" height="auto" class="header-logo"
                src="http://localhost/PHP-MVC-ecommerce/public/assets/images/mona-logo2.png">
        </a>
        <button class="navbar-toggler d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto " id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=home">TRANG CHỦ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=gioithieu">GIỚI THIỆU</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=sanpham">SẢN PHẨM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=lienhe">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=tintuc">TIN TỨC</a>
                </li>
            </ul>
            <?php if(isset($_SESSION['user_id'])){?>
            <!-- <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar"> -->
                    <a class="nav-link" aria-haspopup="true" aria-expanded="false">
              <img src="https://vsmcamp.com/wp-content/uploads/2020/11/JaZBMzV14fzRI4vBWG8jymplSUGSGgimkqtJakOV.jpeg" class="rounded-circle z-depth-0" alt="avatar image"
                height="35">
                    </a>
                <text style="padding-right:20px;font-family: Arial, Helvetica, sans-serif;">Hello, <?php echo $_SESSION['first_name']?></text>
                <!-- </li>
            </ul> -->
            <form class="form-inline my-2 my-lg-0 mr-auto">
                <a href="./?controller=pages&action=dangxuat">
                    <button class="btn btn-outline-success my-2 my-sm-0 log_button" id="tf_btn"
                        style=" font-size: 1em;font-weight: bold;" type="button">Logout</button>
                </a>
                <!-- Dòng echo phía dưới chỉ dùng để test lấy user_id, bỏ đi được -->
                <!-- <?php echo $_SESSION['user_id']?> -->
                <?php } else {?>
                <form class="form-inline my-2 my-lg-0 mr-auto">
                <a href="./?controller=pages&action=dangnhap">
                    <button class="btn btn-outline-success my-2 my-sm-0 log_button" id="tf_btn"
                         type="button">Login</button>
                </a>
                <?php } ?>
                <a href="./?controller=shoppingcart&action=getcart&index=0" class="header__cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Giỏ Hàng</span>
                </a>
                <p id="uid">
                <p>
            </form>
        </div>

    </nav>
</header>