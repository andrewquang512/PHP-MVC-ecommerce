<!DOCTYPE html>
<html lang="en">
<?php 
    include('../../core/DB.php');
?>
<head>
<title>LIEN HE</title>
  <?php 
    include('head.php');
  ?>

    <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/lienhe.css" type="text/css">

</head>

<body>
  <div class="container-fluid" style="padding: 0px ;">
  <?php 
    include('header.php');
  ?>
  </div>

  <div class="body">
    <div class="container-fluid">

      <div class="row row1" >


        <div class="col-md-4  mr-auto ml-auto" >
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2888.6677700318323!2d106.80477820172293!3d10.878269096993685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1606618103249!5m2!1svi!2s"
              width="400" height="377" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
            <label> <i align="center" style="padding-top:20px;">Địa chỉ tọa lạc</i></label>  
          </div>
        </div>

        <div class="col-md-6 mr-auto ml-auto">
          <div >
            <h3 style="padding-top: 30px;" align="center">GỬI TIN NHẮN</h3>
            <br>
            <form>
              <div class="text-error"></div>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Tên">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Nội dung"></textarea>
              </div>
              <div class="form-group" align="center">
                <input type="submit" onclick="return false" name="submit" class="btn btn-info send" value="Gửi" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  </div>
  <?php 
    include('footer.php');
    ?>
<script>
$(document).ready(function(){ 

  function insert_data(){
  $('.text-error').html('');
  var submit='insert_data';
  var name = $('#name').val();
  var title = $('#title').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  var content = $('#content').val();
  $.ajax({
        url:"../../controllers/Contactcontroller.php",
        method:"POST",
        data:{submit:submit,name:name, title:title, phone:phone, email:email, content:content},
        success:function(data){
          $('.text-error').html(data);
        }
      });
}
$('.send').click(function(){
  insert_data();
});
});
</script>
  
</body>

</html>