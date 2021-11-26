<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include('head.php');
    ?>
    <!-- shopping-cart.css-->

    <link rel="stylesheet" href="./public/assets/css/homepages/shopping-cart.css?v=<?php echo time(); ?>">
    <title>GIO HANG</title>
    <style>
    .menu-footer ul li a {
        color: white;
    }
    </style>
</head>


<body>
    <!-- nav -->
    <div class="container-fluid" style="padding: 0px ;">
        <?php 
    include('header.php');
    ?>
    </div>
    <!-- boby -->

    <div class="container-fuild">

        <h4 class="margin-top-30" id="shopping-cart">Giỏ hàng</h4>
        <div class="row dp-block">
            <div class="col col-lg-9 col-md-12 col-sm-12 col-xs-12" id="plist">
                <div class="row bg-light" id="cart-header">
                    <div class="col col-lg-1 col-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name='foo' id="all-check"
                                onClick="toggle(this)" onchange="Calculate();" />
                            <label class="form-check-label bold-text" for="all-check">
                                (<?php echo count($data) - 1;?>)
                            </label>
                            <br>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-center bold-text">Tên sản phẩm</div>
                    <div class="col col-lg-2 all-center bold-text dongia">Đơn giá</div>
                    <div class="col col-lg-2 all-center bold-text dongia">Giảm giá</div>
                    <div class="col col-lg-2 all-center bold-text">Số lượng</div>
                    <div class="col col-lg-2 all-center bold-text thanhtien">Thành tiền</div>
                    <div class="col col-lg-1 all-center">
                        <a href="./?controller=shoppingcart&action=getcart&index=-1">
                            <i class="fa fa-trash-o fa-lg"></i>
                        </a>
                    </div>
                </div>


                <?php 
                if(count($data) > 1) {

                for ($index = 1; $index < count($data); $index++) { 
                    $price = $data[$index]->getPrice()*(10**6);
                    $gift = $data[$index]->getGift()*(10**6);
                    ?>

                <div class="row bg-light cart-product" id=<?php echo "product-" . $index?> name="product">
                    <div class="col col-lg-1 col-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="foo" onchange="Calculate();" />
                        </div>
                        <img src=<?php echo "./public/assets/images/dtdd/" . $data[$index]->getImage() ?> alt="phone1"
                            class="img-size " />
                    </div>

                    <div class="col col-lg-2 col-center">
                        <?php print($data[$index]->getPname());?>
                    </div>

                    <div class="col col-lg-2 col-center hide" id=<?php echo "pid-" . $index?>>
                        <?php print($data[$index]->getId());?>
                    </div>

                    <div class="col col-lg-2 all-center dongia" id=<?php echo "price-" . $index?>>
                        <?php echo number_format($price,0,'','.')?></div>

                    <div class="col col-lg-2 all-center dongia" id=<?php echo "gift-" . $index?>>
                        <?php echo number_format($gift,0,'','.')?>
                    </div>

                    <div class="col col-lg-2 all-center">
                        <input type="button" class="value-button decrease" id=<?php echo "decrease-" . $index?>
                            onclick="decreaseValue(<?php echo $index ?>); intoMoney(<?php echo $index ?>, <?php echo $gift ?>, <?php echo $price ?>); Calculate();"
                            name="decrease" value="-" />

                        <input type="text" id=<?php echo "number-" . $index?> name="quantity" value="1"
                            class="row-center number"
                            oninput="intoMoney(<?php echo $index ?>, <?php echo $gift ?>, <?php echo $price ?>);Calculate();" />

                        <input type="button" class="value-button increase" id=<?php echo "increase-" . $index?>
                            onclick="increaseValue(<?php echo $index ?>); intoMoney(<?php echo $index ?>, <?php echo $gift ?>, <?php echo $price ?>); Calculate();"
                            name="increase" value="+" />
                    </div>

                    <div class="col col-lg-2 all-center red-text thanhtien" id=<?php echo "money-" . $index?>
                        name="money" onchange="Calculate();">
                        <?php echo number_format($price,0,'','.')?>
                    </div>

                    <div class="col col-lg-1 all-center">
                        <a href=<?php echo "./?controller=shoppingcart&action=getcart&index=" . $index ?>>
                            <i class="fa fa-trash-o "></i>
                        </a>
                    </div>


                </div>

                <?php }}  ?>
            </div>

            <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12" id="cart-price">
                <div class="bg-light" id="cart-address">
                    <div class="row">
                        <div class="col col-lg-6 col-center" id="cart-address-giaotoi">
                            Giao tới
                        </div>
                        <div class="col col-lg-6 col-center" id="cart-address-thaydoi">
                            <!-- Thay đổi -->
                        </div>
                    </div>
                    <div class="bold-text"><?php echo $data[0]->getLast_name() . " " .  $data[0]->getFirst_name()?>
                    </div>
                    <div class="bold-text"><?php echo $data[0]->getPhone()?></div>
                    <div id="address-detail">
                        <?php echo $data[0]->getAddr()?></div>
                </div>
                <div class="bg-light" id="cart-total">
                    <div class="row">
                        <div class="col col-6">Tạm tính</div>
                        <div class="col col-6 alignright" id="tempTotalMoney">0 <span class="under">đ</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-6">Giảm giá</div>
                        <div class="col col-6 alignright" id="gift">0 <span class="under">đ</span>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col col-6 bold-text">Tổng cộng</div>
                        <div class="col col-6 red-text alignright" id="totalMoney">0 <span class="under">đ</span>
                        </div>
                    </div>
                </div>

                <div class="all-center">
                    <button type="submit" class="btn btn-danger" onclick="Buy()" id="buycart">Mua
                        hàng</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>

    <!-- footer -->
    <?php 
    include('footer.php');
    ?>
    </div>
    <script type="text/javascript" src="./public/assets/js/shopping-cart.js?v=<?php echo time(); ?>"></script>
</body>

</html>