<nav id="navbar">
    <?php
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, 'index.php') == true) {
        //echo 'Current page contains index.php';
        $title = "Dashboard";
    }
    if (strpos($url, 'comment_manage.php') == true) {
        //echo 'Current page contains index.php';
        $title = "Comment Management";
    }
    if (strpos($url, 'content_manage.php') == true) {
        //echo 'Current page contains index.php';
        $title = "Content Management";
    }
    if (strpos($url, 'employee_manage.php') == true) {
        //echo 'Current page contains index.php';
        $title = "Employee Management";
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
    <div class="profile-details">
        <i class="fas fa-user-circle"></i>
        <span>Anonymous</span>
        <i class="fas fa-caret-down"></i>
    </div>
</nav>