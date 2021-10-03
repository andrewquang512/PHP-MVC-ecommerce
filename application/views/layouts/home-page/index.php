<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANG CHU</title>
  <link rel="shortcut icon" type="image" href="images/cropped-mona-180x180.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="trangchu.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myScript.js"></script>
  <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container-fluid" style="padding: 0;">
    <!-- nav -->
    <?php 
    include('header.php');
    ?>

    <div class="home-banner">
      <div id="myCarousel" class="carousel slide " data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/slider1.jpg" alt="first-slider">
            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 5%;">
              <p>MONA SHOP – NƠI CUNG CẤP ĐIỆN THOẠI UY TÍN</p>
              <h2>HỖ TRỢ CHO BẠN </h2>
              <h2> GIÁ TỐT NHẤT</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/slider2.jpg" alt="second-slider">
            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 5%;">
              <p>MONA SHOP – NƠI CUNG CẤP ĐIỆN THOẠI UY TÍN</p>
              <h2>HỖ TRỢ CHO BẠN </h2>
              <h2> GIÁ TỐT NHẤT</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/slider3.jpg" alt="thirds-slider">
            <div class="carousel-caption d-none d-md-block text-left" style="margin-bottom: 5%;">
              <p>MONA SHOP – NƠI CUNG CẤP ĐIỆN THOẠI UY TÍN</p>
              <h2>HỖ TRỢ CHO BẠN </h2>
              <h2> GIÁ TỐT NHẤT</h2>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon "  aria-hidden="true"></span>
          <span class="sr-only" >Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <section class="home-world " style="margin-top: 4%;">
      <p class="text-center">Những thương hiệu hàng đầu thế giới</p>
      <h2 class="text-center" style="margin-bottom: 30px;">CÔNG NGHỆ HỘI TỤ</h2>

      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item  col-md-9 ml-auto mr-auto"
        data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner ml-auto mr-auto" role="listbox">

          <!--First slide-->
          <div class="carousel-item text-center active">

            <div class="row ">
              <div class="col-md-4">
                <img class="rounded-circle" width="250" height="250" src="images/apple.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>CANADA</h5>
                </div> -->
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <img class="rounded-circle" width="250" height="250" src="images/oppo.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>BRAZIL</h5>
                </div> -->
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <img class="rounded-circle" width="250" height="250" src="images/huawei.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>CUBA</h5>
                </div> -->
              </div>
            </div>

          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item text-center">

            <div class="row">
              <div class="col-md-4">

                <img class="rounded-circle" width="250" height="250" src="images/samsung.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>ITALY</h5>
                </div> -->
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">

                <img class="rounded-circle" width="250" height="250" src="images/vivo.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>USA</h5>
                </div> -->
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">

                <img class="rounded-circle" width="250" height="250" src="images/xiaomi.jpg"
                  alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>PHILIPPINES</h5>
                </div> -->
              </div>
            </div>

          </div>
          <!--/.Second slide-->

        </div>
        <!--/.Slides-->

        <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <!--/.Carousel Wrapper-->

    </section>

    <section class="home-inland" style="margin-top: 50px; padding-bottom: 50px;">
      <p class="text-center">Tham khảo các sản phẩm nổi bật của tháng</p>
      <h2 class="text-center" style="margin-bottom: 30px;">PHONE BEST SALELER</h2>

      <!--Carousel Wrapper-->
      <div id="multi-item-inland" class="carousel slide carousel-multi-item col-md-9 ml-auto mr-auto"
        data-ride="carousel">



        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#multi-item-inland" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-inland" data-slide-to="1"></li>
          <li data-target="#multi-item-inland" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">

            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="images/phone1.png" alt="">
                  <div class="card-body">
                    <!-- <h3 class="card-title">SamSung Galaxy S21 Ultra</h3> -->
                    <p class="card-text">SamSung Galaxy S21 Ultra</p>
                    <div>
                      <span class="price">26,990,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>     
                      <span>82</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="images/phone2.jpg" alt="">
                  <div class="card-body">
                    <p class="card-text">Iphone 12 64GB</p>
                    <div>
                      <span class="price">20,940,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"></span>     
                      <span>102</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="images/phone3.png" alt="">
                  <div class="card-body">
                    <p class="card-text">OPPO Reno6 5G 8G/128GB </p>
                    <div>
                      <span class="price">11,990,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>     
                      <span>45</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item">

            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="images/phone4.png" alt="">
                  <div class="card-body">
                    <p class="card-text">Vivo Y12s (4GB/128GB)</p>
                    <div>
                      <span class="price">4,290,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>     
                      <span>50</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="images/phone5.png" alt="">
                  <div class="card-body">
                    <p class="card-text">Xiami Redmi 9T (6GB/128GB)</p>
                    <div>
                      <span class="price">4,099,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"></span>     
                      <span>150</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="images/phone6.png" alt="">
                  <div class="card-body">
                    <p class="card-text">Huawei P30 Pro 256GB</p>
                    <div>
                      <span class="price">38,299,000
                        <span class="currency">₫</span>
                      </span>
                    </div>
                    <div class="item-rating" style="padding-top:10px">
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>     
                      <span>80</span>
                      </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Second slide-->



        </div>
        <!--/.Slides-->
        <a class="carousel-control-prev" href="#multi-item-inland" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true" style="margin-top: 0px;"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#multi-item-inland" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <!--/.Carousel Wrapper-->


    </section>

    <section class="reason">
      <h2 class="text-center" style="margin :50px auto;">LÝ DO CHỌN MONA SHOP</h2>
      <div class="row" style="width: 80%; margin: 0 auto;">
        <div class="col-md-4 ">
          <div class="achiev-card mb-2">
            <img class="achiev-icon" src="images/smartphone.png" alt="">
            <div class="card-body">
              <div>
                <span style="font-weight: bold; font-size: 1.1em;">Sản phẩm tốt nhất
                </span>
              </div>
              <p>Để mọi người đểu được cung cấp với các sản phẩm mới nhất và chất lượng tốt nhất</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="achiev-card mb-2">
            <img class="achiev-icon" src="images/customer-service.png" alt="">
            <div class="card-body">
              <div>
                <span style="font-weight: bold; font-size: 1.1em;">Tư vấn 24/7
                </span>
              </div>
              <p>Cung cấp dịch vụ tư vấn để mọi người có được sản phẩm mình muốn </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="achiev-card mb-2">
            <img class="achiev-icon" src="images/best-price.png" alt="">
            <div class="card-body">
              <div>
                <span style="font-weight: bold; font-size: 1.1em;">Giá luôn tốt nhất
                </span>
              </div>
              <p>Luôn có nhiều chương trình sale và giá thấp hơn mặt bằng thị trường</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="achieve" > 
      <h5>PHỤNG SỰ KHÁCH HÀNG 8 NĂM</h5>
      <h2 class="text-center" style="margin-bottom: 30px;">THÀNH QUẢ CỦA MONA SHOP</h2>

      <div class="row" style="width: 80%; margin: 0 auto;">
        <div class="col-12 col-md-6 col-lg-3 ">
          <div class="achiev-card mb-2">
            <img class="achiev-icon"
              src="images/phone-icon.png" alt="">
            <div class="card-body">
              <div>
                <span class="number">20,549+
                </span>
              </div>
              <p style="color: aliceblue;" >Sản phẩm đã bán</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 ">
          <div class="achiev-card mb-2">
            <img class="achiev-icon"
              src="images/guest.png" alt="">
            <div class="card-body">
              <div>
                <span class="number">60,419+
                </span>
              </div>
              <p style="color: aliceblue;" >Khách hàng</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="achiev-card mb-2">
            <img class="achiev-icon"
              src="images/world.png" alt="">
            <div class="card-body">
              <div>
                <span class="number">100+
                </span>
              </div>
              <p style="color: aliceblue;">Số chi nhánh</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 ">
          
          <div class="achiev-card mb-2">
            <img class="achiev-icon"
              src="images/money.png" alt="">
            <div class="card-body">
              <div>
                <span class="number">200000$+
                </span>
              </div>
              <p style="color: aliceblue;" >Doanh thu</p>
            </div>
          </div>
        </div>

      </div>
    </section>


    <?php 
    include('footer.php');
    ?>
  </div>

</body>

</html>