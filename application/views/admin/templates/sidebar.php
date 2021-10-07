<div class='sidebar' id="sidebar">
        <?php 
            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);
        ?>
        <div class='logo'>
            <a class="" href="#">
                <img width="120" height="auto" class="header-logo" src="../../../public/assets/images/mona-logo2.png">
            </a>
        </div>
        
        <ul class='sidebar-links'>
            <li><a class="<?php echo ($page == 'index.php') ? 'active' : ''; ?>" href="./index.php">
                    <i class="fas fa-bars"></i>
                    <span>Dashboard</span>
            </a> </li>
            <li><a href="#">
                <i class="fas fa-money-bill-wave"></i>
                <span>Sales Management</span>
            </a> </li>
            <li><a class="<?php echo ($page == 'customer_manage.php') ? 'active' : ''; ?>" href="./customer_manage.php">
                <i class="fas fa-users"></i>
                <span>Customer Management</span>
            </a> </li>
            <li><a class="<?php echo ($page == 'comment_manage.php') ? 'active' : ''; ?>" href="./comment_manage.php">
                    <i class="fas fa-comments"></i>
                    <span>Comment Management</span>
            </a> </li>
            <li><a class="<?php echo ($page == 'contact_manage.php') ? 'active' : ''; ?>" href="./contact_manage.php">
                    <i class="fas fa-address-card"></i>
                    <span>Contact Management</span>
            </a></li>
            <li><a href="#">
                    <i class="fas fa-pager"></i>
                    <span>Page Management</span>
            </a></li>
            <li><a class="<?php echo ($page == 'product_manage.php') ? 'active' : ''; ?>" href="./product_manage.php">
                <i class="fas fa-boxes"></i>
                <span>Product Management</span>
            </a></li>
            <li><a class="<?php echo ($page == 'content_manage.php') ? 'active' : ''; ?>" href="./content_manage.php">
                <i class="far fa-newspaper"></i>
                <span>Content Management</span>
            </a></li>
            <!-- <li class="log_out"><a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log Out</span>
            </a></li> -->
        </ul>
</div>