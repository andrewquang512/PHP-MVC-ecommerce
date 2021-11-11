<?php
  // include('../../core/DB.php');
  $connect = (new DB())->CreateConnection();
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  //Get username and password
  $username = $_POST['username'];
  $password = $_POST['pwd'];
  
  //Prevent mysqli injection :))
  $username = stripcslashes($username);  
  $password = stripcslashes($password);  
  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

  //Connect to database
  $sql = "SELECT * FROM customer WHERE user_name = '$username' AND pwd = '$password'";
  $result = mysqli_query($con, $sql);

  //Get match account from database
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  //Check if account esixted
  if($count == 1){  
    $_SESSION['user_id'] = $row['user_id'];
    
    //If it's the admin account
    if($username == 'admin'){
      exit('2');
      //header("location: http://localhost/PHP-MVC-ecommerce/application/views/admin/index.php");
    }
    else{
      exit('1');
      //header("location: http://localhost/PHP-MVC-ecommerce/application/views/layouts/index.php");
    }
  }  
  else{  
    exit('0');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>DANG NHAP</title>  
  <?php 
    include('head.php');
  ?>
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/dangnhap.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.8.5/jquery-ui.min.js"></script>
</head>
  <style>
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
  font-size: 14;
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
  
<body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">

        <form id="login_form" action="dangnhap.php" method="POST">
          <fieldset>
            <h2 class="header-text">Đăng nhập</h2>
            <hr>
            <input type="text" placeholder="Nhập tên đăng nhập" id="username" pattern="[A-Za-z]{3,}" title="Tên đăng nhập phải ít nhất 3 kí tự" required>       
            <input type="password" placeholder="Nhập mật khẩu" id="pwd" pattern="[A-Za-z0-9]{3,15}" title="Mật khẩu phải từ 3 đến 15 kí tự" required>
            <p class="noti" id="noti"></p>
            <input type="button" id="sub_btn" class="btn" value="Đăng nhập">          
            <h3 class="subheader-text">Chưa có tài khoản? <a href="./?controller=pages&action=dangky">Đăng ký ngay</a></h3>
          </fieldset>          

        </form>
    </div>

    <?php
    include('footer.php');
    ?>
    <script>
      $(document).ready(function(){
        $('#sub_btn').click(function(){
          var username = $('#username').val().trim();
          var pwd = $('#pwd').val().trim();

          if(username != "" && pwd != ""){
            $.ajax({
              url: 'dangnhap.php',
              type: 'POST',
              data: {
                username: username,
                pwd: pwd
              },
              success: function(response){
                var msg = "";
                //If it's customer
                if(response == 1){
                  window.open("http://localhost/PHP-MVC-ecommerce/application/views/layouts/index.php", "_self");
                }
                //If it's admin
                else if(response == 2){
                  window.open("http://localhost/PHP-MVC-ecommerce/application/views/admin/index.php", "_self");
                }
                else{
                  msg = "X Tài khoản hoặc mật khẩu chưa đúng";
                }
                $('#noti').html(msg);
              }
            });
          }
        });
      });
    </script>  
</body>
</html>
