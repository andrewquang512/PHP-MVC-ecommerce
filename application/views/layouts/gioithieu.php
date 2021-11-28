<!DOCTYPE html>
<html lang="en">

<head>
  <title>GIOI THIEU</title>
  <?php 
    include('head.php');
  ?>
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/header.css?v=<?php echo time()?>" type="text/css">
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/gioithieu.css" type="text/css">
</head>

<body>
  <!-- nav -->
  <div class="container-fluid" style="padding: 0px ;">
  <?php 
    include('header.php');
    ?>
  </div>
    <!-- boby -->
  <div class="body">
    <div class="row row1 "style="background-image: url(http://localhost/PHP-MVC-ecommerce/public/assets/images/background1.jpg);">
      <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://localhost/PHP-MVC-ecommerce/public/assets/images/gt1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="http://localhost/PHP-MVC-ecommerce/public/assets/images/gt2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="http://localhost/PHP-MVC-ecommerce/public/assets/images/gt3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <div class="col-md-4  mr-auto ml-auto">
        <h3 >TIỂU SỬ CÔNG TY</h3>
        <p class="first_para">Công ty thành lập 21/09/2021 bởi 4 thành viên: 
          <ul>
            <li><strong>Nguyễn Huỳnh Tiến</strong></li>
            <li><strong>Quang Chấn Vĩ</strong></li>
            <li><strong>Lê Thanh Triều</strong></li>
            <li><strong>Võ Đức Duy</strong></li>
          </ul>
        </p>
      </div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row" style="padding: 20px">

      <div class="col-md-4 p2 a1" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/muctieu.jpg');height:300px;">
        <h4  style="color:#E06666">MỤC TIÊU</h4>
        <i style="color:aliceblue; padding: 0 70px 0 70px;font-weight:bold;">Với nhiều năm trong lĩnh vực này, shop cam kết đem đến cho người dùng những sản phẩm tốt nhất cũng như giá tốt nhất </i>
      </div>

      <div class="col-md-4 p2 a2" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/sumenh.png');height:300px;">
        <h4 style="color:#E06666">SỨ MỆNH</h4>
        <i style="color:aliceblue; padding: 0 70px 0 70px;font-weight:bold;"> Đưa khách hành đến với những trải nghiệm công nghệ mới, cung cấp các thiệt bị tốt nhất cho một cuộc sống tiện lợi hơn </i>
      </div>
      <div class="col-md-4 p2 a3" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/tuonglai1.png');height:300px;">
        <h4 style="color:#E06666">TƯƠNG LAI</h4>
        <i style="color:aliceblue; padding: 0 70px 0 70px;font-weight:bold;">Phát triển hơn với nhiều chi nhánh được mở rộng, nhập thêm các dòng sản phẩm thương hiệu nổi tiếng khác thỏa mãn nhu cầu đa thương hiệu</i>


      </div>
    </div>
     <div> 
    
  <!-- footer -->
  <?php 
    include('footer.php');
    ?>
    </div>

    

</body>
</html>