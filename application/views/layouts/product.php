<!doctype html>
<html lang="en">

<head>
    <title>DETAIL PRODUCT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image" href="public/assets/images/cropped-mona-180x180.png">
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/assets/css/homepages/trangchu.css">
    <script type="text/javascript" src="public/assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/assets/js/myScript.js"></script>
</head>

<body>
    <div class="container-fluid" style="padding: 0;">

      <?php 
      include('header.php');
      ?>


        <div class="path-menu" style="background-image: url(<?php echo (CSSPATH . 'images/try.jpg'); ?>);">
            <div class="path">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                        <li class="breadcrumb-item"><a href="phone.php">SẢN PHẨM</a></li>
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
                                <img class="d-block w-100" src="public/assets/images/phone1.png" alt="first-slider" style="justify-content: center;"
                                    style="max-height: 300px;">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/assets/images/phone2.jpg" alt="second-slider" style="justify-content: center;"
                                    style="max-height: 300px;">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="public/assets/images/phone3.png" alt="thirds-slider" style="justify-content: center;"
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
                    <h2 >
                        Samsung Galaxy S20 Ultra</h2>
                        
                        <div>
                            <div class="product-short-description" style="padding-top:10px">
                              <table >
                                <tr>
                                  <th>Màn hình</th>
                                  <td>Dynamic AMOLED 2X</td>
                                </tr>
                                <tr>
                                  <th>Hệ điều hành</th>
                                  <td>Android 10</td>
                                </tr>
                                <tr>
                                  <th>RAM</th>
                                  <td>12 GB</td>
                                </tr>
                                <tr>
                                  <th>Chip xử lí</th>
                                  <td>Exynos 990</td>
                                </tr>
                                <tr>
                                  <th>Tốc độ CPU</th>
                                  <td>2 nhân 2.73 GHz</td>
                                </tr>
                                <tr>
                                  <th>Dung lượng pin</th>
                                  <td>5000 mAh</td>
                                </tr>
                              </table>
                            <p style="padding-top: 10px;">Thời gian bảo hành: 1 năm</p>
                            <p>Liên hệ 1800.1060 để được tư vấn (7:30 - 22:00)</p>
                            </div>
                        </div>
                        <input name="" id="btn-buy" class="btn btn-primary" type="button" value="ĐẶT NGAY ">
                        
                </div>
            </div>
        </div>

        <?php 
    include('footer.php');
    ?>
    </div>



</body>

</html>