<nav id="navbar">
    <?php
    if ($file == 'index') {
        //echo 'Current page contains index.php';
        $title = "Dashboard";
    }
    if ($file == 'comment_manage') {
        //echo 'Current page contains index.php';
        $title = "Comment Management";
    }
    if ($file == 'content_manage') {
        //echo 'Current page contains index.php';
        $title = "Content Management";
    }
    if ($file == 'customer_manage') {
        //echo 'Current page contains index.php';
        $title = "Customer Management";
    }
    if ($file == 'contact_manage') {
        //echo 'Current page contains index.php';
        $title = "Contact Management";
    }
    if ($file == 'product_manage') {
        //echo 'Current page contains index.php';
        $title = "Product Management";
    }
    ?>
    <div class="sidebar-button">
        <i onclick="toogleMenu();" class="fas fa-bars"></i>
        <span><?php echo $title;?></span>
    </div>
    <!-- <div class="search-box">
        <input type="text" placeholder="Search">
        <i class="fas fa-search"></i>
    </div> -->
    <!-- <div class="profile-details">
        <i class="fas fa-user-circle"></i>
        <span>Anonymous</span>
        <i class="fas fa-caret-down"></i>
    </div> -->
    <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i>
            <span>Admin</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=pages&action=dangxuat">Log Out</a>
        </div>
    </div>
</nav>