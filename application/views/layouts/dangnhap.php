<?php
  //require_once '../../config/db.php';
  session_start();
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $connect = (new DB())->CreateConnection();
  //Get username and password
  $username = $_POST['username'];
  $password = $_POST['pwd'];
  //console.log($username);
  //console.log($password);
  
  //Prevent mysqli injection :))
  $username = stripcslashes($username);  
  $password = stripcslashes($password);  
  $username = mysqli_real_escape_string($connect, $username);
  $password = mysqli_real_escape_string($connect, $password);
  
  //Connect to database
  $sql = "SELECT * FROM customer WHERE user_name = '$username' AND pwd = '$password'";
  $result = mysqli_query($connect, $sql);
  
  //Get match account from database
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  // print(" iam here");
  // print_r($row );
  // print(" iam here");
  // print_r($result);
  // print(" iam here");
  // print($count);
  // print(" iam here");
  //Check if account esixted
  if($count == 1){  
    //console.log('Have run');
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['first_name']=$row['first_name'];
    //If it's the admin account
    if($username == 'admin'){
      //header('Location: http://localhost/PHP-MVC-ecommerce/?controller=admin&action=home');
      exit('2');
    }
    else{
      //header('Location: http://localhost/PHP-MVC-ecommerce/?controller=pages&action=home');
      exit('1');
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
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/header.css?v=<?php echo time()?>" type="text/css">
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/dangnhap.css" type="text/css">
  <script src="https://kit.fontawesome.com/27f4102942.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.8.5/jquery-ui.min.js"></script>
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
  font-size: 13.6px;
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
</head>
<body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">

        <form id="login_form" action="http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangnhap" method="POST">
          <fieldset>
            <h2 class="header-text">????ng nh???p</h2>
            <hr>
            <input type="text" placeholder="Nh???p t??n ????ng nh???p" id="username" pattern="[A-Za-z]{3,}" title="T??n ????ng nh???p ph???i ??t nh???t 3 k?? t???" required>       
            <input type="password" placeholder="Nh???p m???t kh???u" id="pwd" pattern="[A-Za-z0-9]{3,15}" title="M???t kh???u ph???i t??? 3 ?????n 15 k?? t???" required>
            <i class="fas fa-eye-slash" id="eyeID" style="margin-left: -30px; cursor: pointer; position: absolute; top: 50%;  transform: translateY(-100%);right: 12%;"></i>
            <p class="noti" id="noti"></p>
            <input type="button" id="sub_btn" class="btn" value="????ng nh???p">          
            <h3 class="subheader-text">Ch??a c?? t??i kho???n? <a href="./?controller=pages&action=dangky">????ng k?? ngay</a></h3>
          </fieldset>          

        </form>
    </div>

    <?php
    include('footer.php');
    ?>
</body>
    <script>
      $(document).ready(function(){
        $('#eyeID').click(function(){       
          if($(this).hasClass('fas fa-eye-slash')){          
            $(this).removeClass('fas fa-eye-slash');         
            $(this).addClass('fas fa-eye');         
            $('#pwd').attr('type','text');           
          }else{        
            $(this).removeClass('fas fa-eye');            
            $(this).addClass('fas fa-eye-slash');              
            $('#pwd').attr('type','password');
          }
        });
        
        $('#sub_btn').click(function(){
          var username = $('#username').val().trim();
          var pwd = $('#pwd').val().trim();

          if(username != "" && pwd != ""){
            $.ajax({
              url: 'http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangnhap',
              type: 'POST',
              data: {
                username: username,
                pwd: pwd
              },
              success: function(response){
                console.log(response);
                var msg = "";
                //If it's customer
                if(response == 1){
                  window.open("http://localhost/PHP-MVC-ecommerce/?controller=pages&action=home", "_self");
                }
                //If it's admin
                else if(response == 2){
                  window.open("http://localhost/PHP-MVC-ecommerce/?controller=admin&action=home", "_self");
                }
                else{
                  msg = "X T??i kho???n ho???c m???t kh???u ch??a ????ng";
                }
                $('#noti').html(msg);
              }
            });
          }
        });
      });
    </script>  
</html>
