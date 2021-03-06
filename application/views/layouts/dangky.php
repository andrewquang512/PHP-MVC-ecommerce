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
            $_SESSION['first_name']=$row['first_name'];
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
    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/header.css?v=<?php echo time()?>" type="text/css">
  </head>
  <body>
    <?php
    include('header.php');
    ?>

    <div class="wrapper">
      <form id="signup_form" action="http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangky" method="POST">
        <!--fieldset-->
        <fieldset>
          <h2 class="header-text">T???o t??i kho???n</h2>
          <h3 class="subheader-text">??i???n th??ng tin v??o c??c ??<h3>
          <hr>
          <input type="text" placeholder="Nh???p t??n ????ng k??" id="username" pattern="[A-Za-z0-9]{12}" title="T??n ch??? g???m ch??? ho???c s???, ph???i c?? ??t nh???t m???t ch??? th?????ng" required>
          <input type="text" placeholder="Nh???p e-mail" id="email" pattern="[A-Za-z]+\.@[A-Za-z0-9]+\.[A-z]{3}" title="something@gmail.com" required>
          <input type="password" placeholder="Nh???p m???t kh???u" id="pwd" pattern="[A-Za-z0-9]{3,15}" title="M???t kh???u ph???i t??? 3 ?????n 15 k?? t???" required>
          <input type="password" placeholder="X??c nh???n m???t kh???u" id="confirm_psw" pattern="[A-z0-9]{3,15}" required onkeyup="checkPasswordMatch();">
          <p class="matched" id="matched"></p>
          <input type="button" name="next" class="next action-button" value="Next" />
          <h3 class="subheader-text">???? c?? t??i kho???n? <a href="./?controller=pages&action=dangnhap">????ng nh???p</a></h3>
        </fieldset>
        
        <fieldset>
          <h2 class="header-text">Th??ng tin c?? nh??n</h2>
          <h3 class="subheader-text">??i???n th??ng tin li??n l???c<h3>
          <hr>
          <input type="text" id="fname"  placeholder="H???" required>
          <input type="text" id="lname"  placeholder="T??n" required>
          <input type="text" placeholder="S??? ??i???n tho???i" id="phone" pattern="[0-9]{10}" required>
          <input type="text" placeholder="?????a ch???" id="addr" required>
          <p class="noti" id="noti"></p>
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="submit" name="submit" class="submit action-button" value="Submit" />
          <h3 class="subheader-text">???? c?? t??i kho???n? <a href="./?controller=pages&action=dangnhap">????ng nh???p</a></h3>
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
                  msg = "Email ???? t???n t???i";
                }
                else{
                  msg = "T??n t??i kho???n ???? t???n t???i";
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
