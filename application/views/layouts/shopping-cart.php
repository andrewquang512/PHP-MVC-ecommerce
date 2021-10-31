<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  define('CSSPATH', '../../../public/assets/'); //define css path
  define('JSPATH','../../../public/assets/js/')
  ?> 
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image" href="http://localhost/PHP-MVC-ecommerce/public/assets/images/cropped-mona-180x180.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/bootstrap/css/bootstrap.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <!-- shopping-cart.css-->
    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/shopping-cart.css" >
<style>
     /* A little change in header */
 .header__cart {
  border: 1px solid red;
  border-radius: 4px;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  line-height: 14px;
  margin-left: 10px;
  padding: 5px 8px;
  width: 110px;
  height: 35px;
 }
 .header__cart:hover {
  background-color: red;
  transition: 1s;
 }
 .header__cart:hover i {
  color: #fff;
 }
 .header__cart:hover span {
  color: #fff;
 }
 .header__cart i {
  margin-right: 5px;
  font-size: 20px;
  color: black;
 }
 .header__cart span {
  color: black;
  font-size: 14px;
 }
 .header__cart i,
 .header__cart span {
  display: inline-block;
  vertical-align: middle;
 }
 .icon-cart {
  background-position: -175px 0;
  height: 18px;
  width: 20px;
 }
 .header__cart i,
 .header__cart span {
  display: inline-block;
  vertical-align: middle;
 }
</style>  
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Shopping Cart</title>
  </head>
  <body>
  <?php 
    include('header.php');
    ?> 

    <div class="container">
      <h4 class="margin-top-30" id="shopping-cart">Giỏ hàng</h4>
      <div class="row">
        <div class="col col-lg-9">
          <div class="row bg-light" id="cart-header">
            <div class="col col-lg-2 col-center">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="all-check"
                />
                <label class="form-check-label bold-text" for="all-check">
                  Tất cả
                </label>
                <span>(4)</span>
              </div>
            </div>
            <div class="col col-lg-3 col-center bold-text">Tên sản phẩm</div>
            <div class="col col-lg-2 all-center bold-text">Đơn giá</div>
            <div class="col col-lg-2 all-center bold-text">Số lượng</div>
            <div class="col col-lg-2 all-center bold-text">Thành tiền</div>
            <div class="col col-lg-1 all-center">
              <i class="fa fa-trash-o"></i>
            </div>
          </div>
          <div class="row bg-light cart-product">
            <div class="col col-lg-1 col-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" />
              </div>
            </div>
            <div class="col col-lg-1 all-center">
              <img
                src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone1/1.png"
                alt="phone1"
                class="img-size"
              />
            </div>
            <div class="col col-lg-3 all-center">
              Điện Thoại iPhone 12 Mini 128GB - Hàng Chính Hãng
            </div>
            <div class="col col-lg-2 all-center">17.199.000đ</div>
            <div class="col col-lg-2 all-center">
              <input
                type="button"
                class="value-button decrease"
                id="decrease-1"
                onclick="decreaseValue(1)"
                name="decrease"
                value="-"
              />
              <input
                type="text"
                id="number-1"
                name="quantity"
                value="1"
                class="row-center number"
              />
              <input
                type="button"
                class="value-button increase"
                id="increase-1"
                onclick="increaseValue(1)"
                name="increase"
                value="+"
              />
            </div>
            <div class="col col-lg-2 all-center red-text">17.199.000đ</div>
            <div class="col col-lg-1 all-center">
              <i class="fa fa-trash-o"></i>
            </div>
          </div>
          <div class="row bg-light cart-product">
            <div class="col col-lg-1 col-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" />
              </div>
            </div>
            <div class="col col-lg-1 all-center">
              <img
                src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone3/1.png"
                alt="phone1"
                class="img-size"
              />
            </div>
            <div class="col col-lg-3 all-center">
              Điện Thoại iPhone 12 Mini 128GB - Hàng Chính Hãng
            </div>
            <div class="col col-lg-2 all-center">17.199.000đ</div>
            <div class="col col-lg-2 all-center">
              <input
                type="button"
                class="value-button decrease"
                id="decrease-2"
                onclick="decreaseValue(2)"
                name="decrease"
                value="-"
              />
              <input
                type="text"
                id="number-2"
                name="quantity"
                value="1"
                class="row-center number"
              />
              <input
                type="button"
                class="value-button increase"
                id="increase-2"
                onclick="increaseValue(2)"
                name="increase"
                value="+"
              />
            </div>
            <div class="col col-lg-2 all-center red-text">17.199.000đ</div>
            <div class="col col-lg-1 all-center">
              <i class="fa fa-trash-o"></i>
            </div>
          </div>
          <div class="row bg-light cart-product">
            <div class="col col-lg-1 col-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" />
              </div>
            </div>
            <div class="col col-lg-1 all-center">
              <img
                src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone4/1.png"
                alt="phone1"
                class="img-size"
              />
            </div>
            <div class="col col-lg-3 all-center">
              Điện Thoại iPhone 12 Mini 128GB - Hàng Chính Hãng
            </div>
            <div class="col col-lg-2 all-center">17.199.000đ</div>
            <div class="col col-lg-2 all-center">
              <input
                type="button"
                class="value-button decrease"
                id="decrease-3"
                onclick="decreaseValue(3)"
                name="decrease"
                value="-"
              />
              <input
                type="text"
                id="number-3"
                name="quantity"
                value="1"
                class="row-center number"
              />
              <input
                type="button"
                class="value-button increase"
                id="increase-3"
                onclick="increaseValue(3)"
                name="increase"
                value="+"
              />
            </div>
            <div class="col col-lg-2 all-center red-text">17.199.000đ</div>
            <div class="col col-lg-1 all-center">
              <i class="fa fa-trash-o"></i>
            </div>
          </div>
          <div class="row bg-light cart-product">
            <div class="col col-lg-1 col-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" />
              </div>
            </div>
            <div class="col col-lg-1 all-center">
              <img
                src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/phone5/1.png"
                alt="phone1"
                class="img-size"
              />
            </div>
            <div class="col col-lg-3 all-center">
              Điện Thoại iPhone 12 Mini 128GB - Hàng Chính Hãng
            </div>
            <div class="col col-lg-2 all-center">17.199.000đ</div>
            <div class="col col-lg-2 all-center">
              <input
                type="button"
                class="value-button decrease"
                id="decrease-4"
                onclick="decreaseValue(4)"
                name="decrease"
                value="-"
              />
              <input
                type="text"
                id="number-4"
                name="quantity"
                value="1"
                class="row-center number"
              />
              <input
                type="button"
                class="value-button increase"
                id="increase-4"
                onclick="increaseValue(4)"
                name="increase"
                value="+"
              />
            </div>
            <div class="col col-lg-2 all-center red-text">17.199.000đ</div>
            <div class="col col-lg-1 all-center">
              <i class="fa fa-trash-o"></i>
            </div>
          </div>
        </div>

        <div class="col col-lg-3" id="cart-price">
          <div class="bg-light" id="cart-address">
            <div class="row">
              <div class="col col-lg-6 col-center" id="cart-address-giaotoi">
                Giao tới
              </div>
              <div class="col col-lg-6 col-center" id="cart-address-thaydoi">
                Thay đổi
              </div>
            </div>
            <div class="bold-text">Nguyễn Văn A</div>
            <div class="bold-text">0352800000</div>
            <div id="address-detail">
              17/10 Đường Hùng Vương, phường Tân Phú, Quận 1, TPHCM
            </div>
          </div>

          <div class="bg-light" id="cart-total">
            <div class="row">
              <div class="col col-6">Tạm tính</div>
              <div class="col col-6">3.779.000đ</div>
            </div>
            <div class="row">
              <div class="col col-6">Giảm giá</div>
              <div class="col col-6">0đ</div>
            </div>
            <hr />
            <div class="row">
              <div class="col col-6 bold-text">Tổng cộng</div>
              <div class="col col-6 red-text">3.779.000đ</div>
            </div>
          </div>

          <div class="all-center">
            <button type="button" class="btn btn-danger">Mua hàng</button>
          </div>
        </div>
      </div>
    </div>

    <!-- shopping-cart.js -->
    <script
      type="text/javascript"
      src="http://localhost/PHP-MVC-ecommerce/public/assets/js/shopping-cart.js"
    ></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
