<?php 
    if(!isset($_SESSION)) { 
      session_start(); 
    }
?>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light   " id="navbar">

      <a class="navbar-brand text-center col-3  ml-auto" href="index.php">
        <img width="120" height="auto" class="header-logo" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/mona-logo2.png">
      </a>
      <button class="navbar-toggler d-lg-none ml-auto" type="button" data-toggle="collapse"
        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-auto " id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto ">
          <li class="nav-item active">
            <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;" href="index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"href="gioithieu.php">GIỚI THIỆU</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-dark"style=" font-size: 1em;font-weight: bold;" href="phone.php" >SẢN PHẨM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark"style=" font-size: 1em;font-weight: bold;" href="lienhe.php">LIÊN HỆ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark"style=" font-size: 1em;font-weight: bold;" href="tintuc.php">TIN TỨC</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-auto">
          <?php if(isset($_SESSION['user_id'])){?>
            <a href="dangxuat.php">
              <button class="btn btn-outline-success my-2 my-sm-0 text-dark" id="tf_btn" style=" font-size: 1em;font-weight: bold;" type="button" >Logout</button>
            </a>
            <!-- Dòng echo phía dưới chỉ dùng để test lấy user_id, bỏ đi được -->            
            <?php echo $_SESSION['user_id']?>
          <?php } else {?>
            <a href="dangnhap.php">
              <button class="btn btn-outline-success my-2 my-sm-0 text-dark" id="tf_btn" style=" font-size: 1em;font-weight: bold;" type="button" >Login</button>
            </a>
          <?php } ?> 
          <a href="shopping-cart.php" class="header__cart">
            <i class="fa fa-shopping-cart" ></i>
            <span >Giỏ Hàng</span>
          </a>
          <p id="uid"><p>
        </form>
      </div>      

    </nav>
  </header>
  
  
