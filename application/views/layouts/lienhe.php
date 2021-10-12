<!DOCTYPE html>
<html lang="en">

<head>
<title>LIEN HE</title>
  <?php 
    include('head.php');
  ?>
  <link rel="stylesheet" href="<?php echo (CSSPATH . "css/homepages/lienhe.css"); ?>" type="text/css">
</head>

<body>
  <div class="container-fluid" style="padding: 0px ;">
  <?php 
    include('header.php');
  ?>
  </div>

  <div class="body">
    <div class="container-fluid">
      <div class="row row1" style="background-image:url(<?php echo (CSSPATH . 'images/background1.jpg'); ?>)">

        <div class="col-md-4  mr-auto ml-auto">
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2888.6677700318323!2d106.80477820172293!3d10.878269096993685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1606618103249!5m2!1svi!2s"
              width="400" height="377" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
          </div>
        </div>

        <div class="col-md-6 mr-auto ml-auto">
          <div>
            <h3 style="padding-top: 30px;">GỬI TIN NHẮN</h3>
            <br>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="TÊN">
              </div>
              <div class="form-group">
                <input type="tieu de" class="form-control" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <input type="phone" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                  placeholder="Nội dung"></textarea>
              </div>
              <button type="submit" class="btn btn-lg btn-primary send_message" style="margin-bottom:20px;">Gửi</button>
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
</body>

</html>