<!DOCTYPE html>
<html lang="en">

<head>
  <title>TIN TUC</title>
  <?php 
    include('head.php');
  ?>
  <style>
    details > summary {
  padding: 4px;
  width: 200px;
  background-color: #EEEEEE;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}

details > p {
  background-color: #EEEEEE;
  padding: 4px;
  margin: 0;
  box-shadow: 1px 1px 2px #bbbbbb;
}
  </style>
  <link rel="stylesheet" href="http://localhost/PHP-MVC-ecommerce/public/assets/css/homepages/tintuc.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php 
    include('header.php');
    ?>    
<div class="container-fluid">
  <div class="row">
  <div class="col-8 col-md-8">
    <h3 class="titlehome">Dành cho bạn</h3>
    <form class="form-inline my-2 my-lg-0 search">
        <input class="form-control mr-sm-2 " type="search" placeholder="Fill in keyword" aria-label="Search" id="keyword">
        <button class="btn btn-outline-success my-2 my-sm-0 search" type="button">Search</button>       
    </form>
    <div class="news-array" style="padding-top: 20px;"></div>
  </div>
  <div class="col-4 col-md-4">   
    <h3 class="titlehome">Thảo luận nhiều</h3>
    <div class="summarycomment">
                <a href="https://www.thegioididong.com/tin-tuc/nokia-x80-pro-co-gi-moi-1383246">
                    <div>1</div>
                    <h3>Nghe Đồn Là Nokia X80 Pro: Pin lên tới 7.900 mAh, sử dụng chip Snapdragon 888, camera chính độ phân giải 108MP
                        <span class="morecom"><i class="material-icons" style="font-size:15px;">question_answer</i>52</span></h3>
                </a>
                <a href="https://www.thegioididong.com/tin-tuc/gia-ban-nokia-x80-pro-1384510#:~:text=Theo%20trang%20whatmobile24%2C%20Nokia%20X80,(kho%E1%BA%A3ng%209.8%20tri%E1%BB%87u%20%C4%91%E1%BB%93ng).">
                    <div>2</div>
                    <h3>Giá bán Nokia X80 Pro: Với nhiều thông số khủng và viên pin gần 8.000 mAh tưởng giá sẽ cao lắm, nào ngờ...
                        <span class="morecom"><i class="material-icons" style="font-size:15px;">question_answer</i>26</span></h3>
                </a>
                <a href="https://www.thegioididong.com/tin-tuc/cau-hinh-nokia-x80-pro-nhu-the-nao-1384496">
                    <div>3</div>
                    <h3>Cấu hình Nokia X80 Pro: Màn hình lớn 6.9 inch, chạy chip đầu bảng, đặc biệt là có viên pin 'siêu khủng long' gần 8.000mAh
                        <span class="morecom"><i class="material-icons" style="font-size:15px;">question_answer</i>19</span></h3>
                </a>
                <a href="https://phuongtung.vn/cong-nghe/danh-gia-ios-15-chinh-thuc-apple-bo-sung-nhieu-tinh-nang-thu-vi-co-gay-nong-may-hao-pin-nhanh-hieu-nang-bi-giam/">
                    <div>4</div>
                    <h3>Đánh giá iOS 15 chính thức: Apple bổ sung nhiều tính năng thú vị, có gây nóng máy? Hao pin nhanh? Hiệu năng bị giảm?
                        <span class="morecom"><i class="material-icons" style="font-size:15px;">question_answer</i>15</span></h3>
                </a>
    </div>
    <h3 class="titlehome">Sự kiện</h3>
    <ul class="summaryevent">
     <li>
      <a href="https://www.thegioididong.com/tin-tuc/oppo-k9-pro-ra-mat-voi-man-hinh-120hz-dimensity-1200-1385767">
        <div class="calen">
        <i class="fa fa-calendar" style="font-size:48px;color:red"></i>
        </div>
          <h3>26/9 :Ra mắt OPPO K9 Pro</h3>
        <span class="ddevent"><i class="fa fa-map-marker" style="font-size:24px; padding-right:5px"></i>Trung Quốc</span>
      </a>
     </li>
     <li>
      <a href="https://cellphones.com.vn/sforum/xiaomi-civi-ra-mat-snapdragon-778g-camera-truoc-32mp-gia-chi-tu-9-2-trieu-dong">
        <div class="calen">
        <i class="fa fa-calendar" style="font-size:48px;color:red"></i>
        </div>
          <h3>27/9 :Ra mắt dòng điện thoại Xiaomi Civi</h3>
        <span class="ddevent"><i class="fa fa-map-marker" style="font-size:24px; padding-right:5px"></i>Trung Quốc</span>
      </a>
     </li>
     <li>
      <a href="https://www.thegioididong.com/tin-tuc/oppo-f19s-ra-mat-1386000">
        <div class="calen">
        <i class="fa fa-calendar" style="font-size:48px;color:red"></i>
        </div>
            <h3>27/9 :Ra mắt OPPO F19s</h3>
        <span class="ddevent"><i class="fa fa-map-marker" style="font-size:24px; padding-right:5px"></i>Ấn Độ</span>
      </a>
     </li>
    </ul>
  </div>
  </div>
</div>
<?php 
    include('footer.php');
?>
<script>
  $(document).ready(function() {
  search_data();
  function search_data(){
    $('.news-array').html('');
    var search='search_data';
    var keyword=$('#keyword').val();
    $.ajax({
      url:"../../controllers/Newscontroller.php",
      method:"POST",
      data:{search:search,keyword:keyword},
      success:function(data){
        $('.news-array').html(data);
      }
    });
  }
  $('.search').click(function(){
    search_data();
  });
});  
</script>
</body>

</html>    