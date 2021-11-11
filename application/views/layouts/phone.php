<?php 
    // include('../../core/DB.php');
    $connect = (new DB())->CreateConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHONE</title>
  <?php 
    include('head.php');
  ?>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/bootstrap/css/jquery-ui.css"><!--//just add-->
  <script type="text/javascript" src="http://localhost/PHP-MVC-ecommerce/public/assets/bootstrap/js/bootstrap.min1.js"></script><!--//just add-->
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/phone.css" type="text/css">
</head>

<body>
    <?php 
    include('header.php');
    ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-3 col-md-3">
        <div class="left-1" style="padding-bottom:10px;">
          <b style="color:#B4006A">CHỌN MỨC GIÁ (*1.000.000)</b>
          <input type="hidden" id="hidden_minimum_price" value="0" />
          <input type="hidden" id="hidden_maximum_price" value="65.000" />
          <p id="price_show">1 - 65</p>
          <div id="price_range"></div>
        </div>
        <br>
        <div class="left-2">
          <b style="color:#B4006A">THƯƠNG HIỆU</b>
          <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
          $query = "SELECT DISTINCT(brand) FROM phone ORDER BY id DESC";
          $statement = $connect->prepare($query);
          $statement->execute();
          $result = $statement->get_result();
          foreach($result as $row)
          {
          ?>
          <div class="list-group-item checkbox">
              <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['brand']; ?>"  > <?php echo $row['brand']; ?></label>
          </div>
          <?php
          }

          ?>
          </div>
        </div>
        <br>
        <div class="left-3">
         <b style="color:#B4006A">RAM</b>  
         <?php
          $query = "SELECT DISTINCT(ram) FROM phone ORDER BY ram DESC ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->get_result();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['ram']; ?>" > <?php echo $row['ram']; ?> GB</label>
                    </div>
                    <?php    
                    }

                    ?>
        </div> 
        <br> 
        <div class="left-4">
         <b style="color:#B4006A">BỘ NHỚ TRONG</b>  
         <?php
            $query = "SELECT DISTINCT(pstorage) FROM phone ORDER BY pstorage DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->get_result();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['pstorage']; ?>"  > <?php echo $row['pstorage']; ?> GB</label>
                    </div>
                    <?php
                    }
                    ?>	
        </div>  
      </div>
      <div class="col-9 col-md-9" id='list-phones'>
        <div class="row filter_data" style=" margin: 0 auto;">
        </div>
      </div>
    </div>
  </div>
<style>  
 #loading
 {
	text-align:center; 
	background: url('./public/assets/images/loader.gif') no-repeat center; 
	height: 150px;
 }
</style>  
  <?php 
    include('footer.php');
    ?>
<script>
$(document).ready(function() {
    
    filter_data();

    function filter_data()
    {
      $('.filter_data').html('<div id="loading" style="" ></div>');
      var action = 'fetch_data';
      var minimum_price = $('#hidden_minimum_price').val();
      var maximum_price = $('#hidden_maximum_price').val();
      var brand = get_filter('brand');
      var ram = get_filter('ram');
      var storage = get_filter('storage');
      $.ajax({
        // ! NEEDED FIX !!!!!!!!!!!!!!!!
        url:"http://localhost/PHP-MVC-ecommerce/?controller=client&action=phone",
        // ! NEEDED FIX !!!!!!!!!!!!!!!!
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
        success:function(data){
            $('.filter_data').html(data);
        }
      });
    }

    function get_filter(class_name)
    {
      var filter = [];
      $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
      });
      return filter;
    }

    $('.common_selector').click(function(){
      filter_data();
    });

    $('#price_range').slider({
      range:true,
      min:1.000,
      max:65.000,
      values:[1.000, 65.000],
      step:0.500,
      stop:function(event, ui)
        {
          $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
          $('#hidden_minimum_price').val(ui.values[0]);
          $('#hidden_maximum_price').val(ui.values[1]);
          filter_data();
        }
    });
});
</script>
</body>

</html>