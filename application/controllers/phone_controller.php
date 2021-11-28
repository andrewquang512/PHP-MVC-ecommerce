<?php
// require_once(ROOT .'/application/controllers/base_controller.php');
//Phonecontroller.php


// include('../core/DB.php');
$connect = (new DB())->CreateConnection();
$params = array(0,0,0,0);
if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM phone 
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{   
		if( $params[1]==1 || $params[2]==1 || $params[3]==1  ) {
			$query .= "AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
		}
		else{
			$query .= "WHERE price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
		}
		$params[0]=1;
	}
	if(isset($_POST["brand"]))
	{   
		if( $params[0]==1 || $params[2]==1 || $params[3]==1  ) {
			$brand_filter = implode("','", $_POST["brand"]);
			$query .= "AND brand IN('".$brand_filter."') ";
		}
		else{
			$brand_filter = implode("','", $_POST["brand"]);
			$query .= "WHERE brand IN('".$brand_filter."') ";
		}
		$params[1]=1;	
	}
	if(isset($_POST["ram"]))
	{   
		if( $params[0]==1 || $params[1]==1 || $params[3]==1  ) {
			$ram_filter = implode("','", $_POST["ram"]);
			$query .= "AND ram IN('".$ram_filter."')";
		}
		else{
			$ram_filter = implode("','", $_POST["ram"]);
			$query .= "WHERE ram IN('".$ram_filter."')";
		}
		$params[2]=1;
	}
	if(isset($_POST["storage"]))
	{   
		if( $params[0]==1 || $params[1]==1 || $params[2]==1  ) {
			$storage_filter = implode("','", $_POST["storage"]);
			$query .= "AND pstorage IN('".$storage_filter."')";
		}
        else{
			$storage_filter = implode("','", $_POST["storage"]);
			$query .= "WHERE pstorage IN('".$storage_filter."')";
		}
		$params[3]=1;
	}
    //print_r($query);
	$statement = $connect->prepare($query);
	$statement->execute();
    // ? PDO: $result = $statement->fetchAll();
	// ? PDO: $total_row = $statement->rowCount();
	// ? SQLi method
	$result = $statement->get_result();
	$total_row = $result->fetch_row();
	$output = "";
	if($total_row > 0)
	{
		foreach($result as $row)
		{   
			$output .= '
			<div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-2">
                    <img class="card-img-top img-responsive" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/'. $row['IMAGE'] .'" alt="Phone" >
                    <div class="card-body">
                        <p class="card-text" style="margin-bottom:10px; color:#FF5B5B">'. $row['PNAME'] .'</p>
                        <p style="margin-bottom:5px; font-style:italic">Quà tặng '. number_format($row['GIFT']*1000000,0,'','.') .'đ</p>
                        <a href="./?controller=pages&action=sanpham&id='. $row['LINK'] .'" class="btn btn-primary stretched-link">'. number_format($row['PRICE']*1000000,0,'','.') .'đ</a>
                    </div>
                </div>
            </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>
