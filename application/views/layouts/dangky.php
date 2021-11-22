<?php    
    
    $connect = (new DB())->CreateConnection();
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // initializing variables
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $errors = FALSE;

        $username = stripcslashes($username);  
        $password = stripcslashes($password);
        
        // receive all input values from the form
        $username = mysqli_real_escape_string($connect, $username);    
        $password = mysqli_real_escape_string($connect, $password);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $fname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lname = mysqli_real_escape_string($connect, $_POST['lname']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $addr = mysqli_real_escape_string($connect, $_POST['addr']);

        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM customer WHERE user_name='$username' OR email='$email'";

        $result = mysqli_query($connect, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['user_name'] === $username) {
                $errors = True;
                exit('0');
            }

            if ($user['email'] === $email) {
                $errors = True;
                exit('1');
            }
        }

        // Finally, register user if there are no errors in the form
        if (!$errors) {
            $query_contact = "INSERT INTO customer (user_name, pwd, first_name, last_name, phone, email, addr) VALUES('$username','$password','$fname', '$lname', '$phone', '$email', '$addr')";
            $query_get = "SELECT * FROM customer WHERE user_name = '$username'";


            mysqli_query($connect, $query_contact);
            $get_userid = mysqli_query($connect, $query_get);
            $row = mysqli_fetch_array($get_userid, MYSQLI_ASSOC);

            $_SESSION['user_id'] = $row['user_id'];
            exit('2');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>DANG KY</title>
    <?php 
      include('head.php');
    ?>
    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/dangky.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
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
  </head>
  <body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">
      <form id="signup_form" action="http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangky" method="POST">
        <!--fieldset-->
        <fieldset>
          <h2 class="header-text">Tạo tài khoản</h2>
          <h3 class="subheader-text">Điền thông tin vào các ô<h3>
          <hr>
          <input type="text" placeholder="Nhập tên đăng ký" id="username" pattern="[A-Za-z0-9]{12}" title="Tên chỉ gồm chữ hoặc số, phải có ít nhất một chữ thường" required>
          <input type="text" placeholder="Nhập e-mail" id="email" pattern="[A-Za-z]+\.@[A-Za-z0-9]+\.[A-z]{3}" title="something@gmail.com" required>
          <input type="password" placeholder="Nhập mật khẩu" id="pwd" pattern="[A-Za-z0-9]{3,15}" title="Mật khẩu phải từ 3 đến 15 kí tự" required>
          <input type="password" placeholder="Xác nhận mật khẩu" id="confirm_psw" pattern="[A-z0-9]{3,15}" required onkeyup="checkPasswordMatch();">
          <p class="matched" id="matched"></p>
          <input type="button" name="next" class="next action-button" value="Next" />
          <h3 class="subheader-text">Đã có tài khoản? <a href="./?controller=pages&action=dangnhap">Đăng nhập</a></h3>
        </fieldset>
        
        <fieldset>
          <h2 class="header-text">Thông tin cá nhân</h2>
          <h3 class="subheader-text">Điền thông tin liên lạc<h3>
          <hr>
          <input type="text" id="fname"  placeholder="Họ" required>
          <input type="text" id="lname"  placeholder="Tên" required>
          <input type="text" placeholder="Số điện thoại" id="phone" pattern="[0-9]{10}" required>
          <input type="text" placeholder="Địa chỉ" id="addr" required>
          <p class="noti" id="noti"></p>
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="submit" name="submit" class="submit action-button" value="Submit" />
          <h3 class="subheader-text">Đã có tài khoản? <a href="./?controller=pages&action=dangnhap">Đăng nhập</a></h3>
        </fieldset>
      </form>
    </div>

    <?php
    include('footer.php');
    ?>

    <script>
      var checkPasswordMatch = function() {
        if (document.getElementById('pwd').value ==
          document.getElementById('confirm_psw').value) {
          document.getElementById('matched').style.color = 'green';
          document.getElementById('matched').innerHTML = 'Confirm password matched';
        } else {
          document.getElementById('matched').style.color = 'red';
          document.getElementById('matched').innerHTML = 'Confirm password not matched';
        }
      }

      $(document).ready(function(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $("#password, #confirm_password").keyup(checkPasswordMatch);

        $(".next").click(function(){
            if(animating) return false;
            animating = true;
            
            current_fs = $(this).closest('fieldset');
            next_fs = $(this).closest('fieldset').next();
            
            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            
            //show the next fieldset
            next_fs.show(); 
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
                    next_fs.css({'left': left, 'opacity': opacity});
                }, 
                duration: 800, 
                complete: function(){
                    current_fs.hide();
                    animating = false;
                }, 
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function(){
            if(animating) return false;
            animating = true;
            
            current_fs = $(this).closest('fieldset');
            previous_fs = $(this).closest('fieldset').prev();
            
            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            
            //show the previous fieldset
            previous_fs.show(); 
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                }, 
                duration: 800, 
                complete: function(){
                    current_fs.hide();
                    animating = false;
                }, 
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function(){            
          var username = $('#username').val().trim();
          var pwd = $('#pwd').val().trim();
          var email = $('#email').val().trim();
          var phone = $('#phone').val().trim();
          var fname = $('#fname').val();
          var lname = $('#lname').val();
          var addr = $('#addr').val();
    
          if(username != "" && pwd != "" && email != "" && phone != "" && fname != "" && lname != "" && addr != ""){
            $.ajax({
              url: 'http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangky',
              type: 'POST',
              data: {
                username: username,
                pwd: pwd,
                email: email,
                phone: phone,
                fname: fname,
                lname: lname,
                addr: addr
              },
              success: function(response){
                var msg = "";
                
                if(response == 2){
                  window.open("http://localhost/PHP-MVC-ecommerce/?controller=pages&action=home", "_self");
                }
                
                else if(response == 1){
                  msg = "Email đã tồn tại";
                }
                else{
                  msg = "Tên tài khoản đã tồn tại";
                }
                $('#noti').html(msg);
              }
            });
          }
              
        })
      });
    </script>
  </body>
</html>
