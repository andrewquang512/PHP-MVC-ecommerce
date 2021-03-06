<!DOCTYPE html>
<html lang="en">

<head>
  <title>GIOI THIEU</title>
  <?php 
    include('head.php');
  ?>
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/header.css?v=<?php echo time()?>" type="text/css">
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/gioithieu.css?v=<?php echo time()?>" type="text/css">
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
        <h3 >TI???U S??? C??NG TY</h3>
        <p class="first_para">C??ng ty th??nh l???p 21/09/2021 b???i 4 th??nh vi??n: 
          <ul>
            <li><strong>Nguy???n Hu???nh Ti???n</strong></li>
            <li><strong>Quang Ch???n V??</strong></li>
            <li><strong>L?? Thanh Tri???u</strong></li>
            <li><strong>V?? ?????c Duy</strong></li>
          </ul>
        </p>
      </div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row" style="padding: 20px" id="displayblock">

      <div class="col-md-4 p2 a1" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/muctieu.jpg');height:300px;">
        <h4  style="color:#E06666">M???C TI??U</h4>
        <i class="content">V???i nhi???u n??m trong l??nh v???c n??y, shop cam k???t ??em ?????n cho ng?????i d??ng nh???ng s???n ph???m t???t nh???t c??ng nh?? gi?? t???t nh???t </i>
      </div>

      <div class="col-md-4 p2 a2" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/sumenh.png');height:300px;">
        <h4 style="color:#E06666">S??? M???NH</h4>
        <i class="content"> ????a kh??ch h??nh ?????n v???i nh???ng tr???i nghi???m c??ng ngh??? m???i, cung c???p c??c thi???t b??? t???t nh???t cho m???t cu???c s???ng ti???n l???i h??n </i>
      </div>
      <div class="col-md-4 p2 a3" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/tuonglai1.png');height:300px;">
        <h4 style="color:#E06666">T????NG LAI</h4>
        <i class="content">Ph??t tri???n h??n v???i nhi???u chi nh??nh ???????c m??? r???ng, nh???p th??m c??c d??ng s???n ph???m th????ng hi???u n???i ti???ng kh??c th???a m??n nhu c???u ??a th????ng hi???u</i>


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