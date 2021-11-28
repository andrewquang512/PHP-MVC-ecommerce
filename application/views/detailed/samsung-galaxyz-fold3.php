<!doctype html>
<html lang="en">

<head>
    <title>DETAIL PRODUCT</title>
    <?php 
    include(ROOT.'/application/views/layouts/head.php');
  ?>
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/trangchu.css" type="text/css">
</head>

<body>
    <div class="container-fluid" style="padding: 0;">

      <?php 
      include(ROOT.'/application/views/layouts/header.php');
      ?>


        <div class="path-menu" style="background-image: url('http://localhost/PHP-MVC-ecommerce/public/assets/images/try.jpg');">
            <div class="path">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./?controller=pages&action=home">TRANG CHỦ</a></li>
                        <li class="breadcrumb-item"><a href="./?controller=pages&action=sanpham">SẢN PHẨM</a></li>
                        <li class="breadcrumb-item" aria-current="page">SAMSUNG</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="about" style="padding-bottom: 100px;">
            <div class="col-11 row mr-auto ml-auto" style="padding: 30px">
                <div class="col-md-5">
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone7/1.png" alt="first-slider" style="justify-content: center;"
                                    style="max-height: 300px;">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone7/2.png" alt="second-slider" style="justify-content: center;"
                                    style="max-height: 300px;">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone7/3.png" alt="thirds-slider" style="justify-content: center;"
                                    style="max-height: 300px;">

                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon " aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Samsung Galaxy Z Fold3</h2>
                        <div>
                            <div class="product-short-description" style="padding-top:10px">
                              <table >
                                <tr>
                                  <th>Màn hình</th>
                                  <td>Dynamic AMOLED 2XChính 7.6" & Phụ 6.2"Full HD+</td>
                                </tr>
                                <tr>
                                  <th>Hệ điều hành</th>
                                  <td>Android 11</td>
                                </tr>
                                <tr>
                                  <th>RAM</th>
                                  <td>12 GB</td>
                                </tr>
                                <tr>
                                  <th>Bộ nhớ trong</th>
                                  <td>512 GB</td>
                                </tr>
                                <tr>
                                  <th>Chip xử lí</th>
                                  <td>Snapdragon 888</td>
                                </tr>
                                <tr>
                                  <th>Dung lượng pin</th>
                                  <td>4400 mAh</td>
                                </tr>
                              </table>
                            <p style="padding-top: 10px;">Thời gian bảo hành: 1 năm</p>
                            <p>Liên hệ 1800.1060 để được tư vấn (7:30 - 22:00)</p>
                            </div>
                        </div>
                        <a href="#">
                        <input name="" id="btn-buy" class="btn btn-primary" type="button" value="ĐẶT NGAY ">
                        </a>   
                </div>
            </div>
        </div>

        <?php 
    include(ROOT.'/application/views/layouts/footer.php');
    ?>
    </div>
    <script>
 $(document).ready(function() {
  // alert buy success
    function Addtocart() {
    alert('Thêm vào giỏ hàng thành công');
    };  
  $("#btn-buy").click(function(){
    var addtocart=$('#btn-buy').val();
    $.ajax({
        url:"http://localhost/PHP-MVC-ecommerce/?controller=client&action=detail",
        method:"POST",
        data:{addtocart:addtocart, phone_id:7},
        success:function(data){
          Addtocart();
        }
      });
  });
});  
</script>


</body>

</html>
