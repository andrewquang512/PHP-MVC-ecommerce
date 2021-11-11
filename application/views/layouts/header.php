
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
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;" href="index.php">TRANG CHỦ
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=gioithieu">GIỚI
                        THIỆU</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=phone">SẢN
                        PHẨM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=lienhe">LIÊN
                        HỆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" style=" font-size: 1em;font-weight: bold;"
                        href="./?controller=pages&action=tintuc">TIN
                        TỨC</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-auto">
                <a href="./?controller=pages&action=dangnhap">
                    <button class="btn btn-outline-success my-2 my-sm-0 text-dark"
                        style=" font-size: 1em;font-weight: bold;" type="button">Login</button>
                </a>
                <a href="./?controller=pages&action=shoppingcart" class="header__cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Giỏ Hàng</span>
                </a>
            </form>
        </div>

    </nav>
</header>