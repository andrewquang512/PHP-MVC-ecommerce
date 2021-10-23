<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHONE</title>
  <?php 
    include('head.php');
  ?>
  <link rel="stylesheet" href="<?php echo (CSSPATH . "css/homepages/phone.css"); ?>" type="text/css">
</head>

<body>
    <?php 
    include('header.php');
    ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-3 col-md-3">
        <div class="left-1">
          <b>DANH MỤC SẢN PHẨM</b>
          <nav class="nav flex-column">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
            <div class="dropdown-menu " aria-labelledby="dropdownId">
              <a class="dropdown-item " >IPHONE</a>
              <a class="dropdown-item " >SAMSUNG</a>
              <a class="dropdown-item " >VIVO</a>
              <a class="dropdown-item " >XIAOMI</a>
              <a class="dropdown-item " >OPPO</a>
              <a class="dropdown-item " >HUAWEI</a>
            </div>
          </nav>
        </div>
        <div class="left-2" style="padding-bottom:10px;">
          <b>CHỌN MỨC GIÁ</b>
          <div class="slidecontainer">
            <input type="range" min="1.000.000đ" max="10.000.000đ" value="2.000.000đ" class="slider" id="myRange">
            <p>Mức giá: <span id="demo"></span>đ</p>
          </div>
          <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value * 100000;
            slider.oninput = function () {
              output.innerHTML = this.value * 100000;
            }
          </script>
          <input class="btn btn-secondary" type="submit" value="Lọc">
        </div>
        <div class="left-3">
        <b>TÌM KIẾM</b>  
        <form class="form-inline my-2 my-lg-0 mr-auto" style="padding-top:10px;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-dark" type="submit">Search</button>
        </form>
        </div>  
      </div>
      <div class="col-9 col-md-9">
        <div class="row" style=" margin: 0 auto;">

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone1/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">SamSung Galaxy S21 Ultra</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 300.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>82</span>
                      </p>
                </div>
                <a href="../detailed/samsung-galaxy-21.php" class="btn btn-primary stretched-link">26.990.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone2/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Iphone 12 64GB</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 100.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star" ></span>     
                      <span>102</span>
                      </p>
                </div>
                <a href="../detailed/iphone-12.php" class="btn btn-primary stretched-link">20.940.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone3/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">OPPO Reno6 5G (8GB/128GB)</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 50.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>45</span>
                      </p>
                </div>
                <a href="../detailed/oppo-reno6.php" class="btn btn-primary stretched-link">11.990.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone4/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Vivo Y12s (4GB/128GB)</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 150.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>50</span>
                      </p>
                </div>
                <a href="../detailed/vivo-y12s.php" class="btn btn-primary stretched-link">4.290.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone5/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Xiaomi Redmi 9T (6GB/128GB)</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 300.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"  ></span>     
                      <span>150</span>
                      </p>
                </div>
                <a href="../detailed/xiaomi-redmi-9t.php" class="btn btn-primary stretched-link">4.099.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone6/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Huawei P30 Pro 256GB</p>
                <p style="margin-bottom:5px; font-style:italic">Quà tặng 200.000đ</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>     
                      <span>80</span>
                      </p>
                </div>
                <a href="../detailed/huawei-p30-pro.php" class="btn btn-primary stretched-link">38.299.000đ</a>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone9/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Iphone 13 Pro Max 128GB</p>
                <p style="margin-bottom:5px; font-style:italic">Hàng sắp về</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " "></span>
                      <span class="fa fa-star " "></span>
                      <span class="fa fa-star " "></span>
                      <span class="fa fa-star"  "></span>
                      <span class="fa fa-star"  "></span>     
                      <span>0</span>
                      </p>
                </div>
                <a href="../detailed/iphone-13-promax.php" class="btn btn-primary stretched-link">33.990.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone10/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">Vivo Y21s</p>
                <p style="margin-bottom:5px; font-style:italic">Hàng sắp về</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>0</span>
                      </p>
                </div>
                <a href="../detailed/vivo-y21s.php" class="btn btn-primary stretched-link">4.290.000đ</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card mb-2">
              <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone11/1.png'); ?>" alt="">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:10px">OPPO A74</p>
                <p style="margin-bottom:5px; font-style:italic">Hàng sắp về</p>
                <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star " ></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>0</span>
                      </p>
                </div>
                <a href="../detailed/oppo-a74.php" class="btn btn-primary stretched-link">6.690.000đ</a>
              </div>
            </div>
          </div>

          <div class="ads">
            <p><b><i><u>CÁC SẢN PHẨM KHUYẾN MÃI</u></i></b></p>
          </div>

          <div class="row mr-auto ml-auto">
            <div class="col-12 col-md-6 col-lg-4 mr-auto ml-auto">
              <div class="card mb-2" style="width: 110%;">
                <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone7/1.png'); ?>" alt="">
                <div class="card-body">
                  <p class="card-text" style="margin-bottom:10px">Samsung Galaxy Z Fold3</p>
                  <p style="margin-bottom:5px; font-style:italic"> Giảm giá: <span style="text-decoration-line: line-through;">42.100.000đ</span> -5%</p>
                  <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  style="color:orange"></span>
                      <span class="fa fa-star"  ></span>     
                      <span>10</span>
                      </p>
                </div>
                  <a href="../detailed/samsung-galaxyz-fold3.php" class="btn btn-primary stretched-link">41.900.000đ</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mr-auto ml-auto">
              <div class="card mb-2" style="width: 110%;">
                <img class="card-img-top" src="<?php echo (CSSPATH . 'images/dtdd/phone8/1.png'); ?>" alt="">
                <div class="card-body">
                  <p class="card-text" style="margin-bottom:10px">Xiaomi Mi 11 Lite</p>
                  <p style="margin-bottom:5px; font-style:italic"> Giảm giá: <span style="text-decoration-line: line-through;">8.350.000đ</span> -10%</p>
                  <div class="item-rating" >
                      <p>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star " style="color:orange"></span>
                      <span class="fa fa-star"  ></span>
                      <span class="fa fa-star"  ></span>     
                      <span>51</span>
                      </p>
                </div>
                  <a href="../detailed/xiaomi-mi11-lite.php" class="btn btn-primary stretched-link">7.590.000đ</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php 
    include('footer.php');
    ?>
  
</body>

</html>