<div class='sidebar' id="sidebar">
        <div class='logo'>
            <a class="" href="#">
                <img width="120" height="auto" class="header-logo" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/mona-logo2.png">
            </a>
        </div>
        
        <ul class='sidebar-links'>
            <li><a class="<?php echo ($file == 'index') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=home">
                    <i class="fas fa-bars"></i>
                    <span>Dashboard</span>
            </a> </li>
            <li><a class="<?php echo ($file == 'customer_manage') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=customermanage">
                <i class="fas fa-users"></i>
                <span>Customer Management</span>
            </a> </li>
            <li><a class="<?php echo ($file == 'comment_manage') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=commentmanage">
                    <i class="fas fa-comments"></i>
                    <span>Comment Management</span>
            </a> </li>
            <li><a class="<?php echo ($file == 'contact_manage') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=contactmanage">
                    <i class="fas fa-address-card"></i>
                    <span>Contact Management</span>
            </a></li>
            <li><a href="#">
                    <i class="fas fa-pager"></i>
                    <span>Page Management</span>
            </a></li>
            <li><a class="<?php echo ($file == 'product_manage') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=productmanage">
                <i class="fas fa-boxes"></i>
                <span>Product Management</span>
            </a></li>
            <li><a class="<?php echo ($file == 'content_manage') ? 'active' : ''; ?>" href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=contentmanage">
                <i class="far fa-newspaper"></i>
                <span>Content Management</span>
            </a></li>
            <!-- <li class="log_out"><a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log Out</span>
            </a></li> -->
        </ul>
</div>