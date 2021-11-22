<?php

//Newscontroller.php

$connect = (new DB())->CreateConnection();
$params = array(0,0,0,0);
if(isset($_POST["search"]))
{   
    $query="";
    if(!empty($_POST["keyword"]))
	{ 
        $keyword = $_POST["keyword"];
        $query .="SELECT DISTINCT news.news_id,news.title,news.content,news.image,news.release_hour FROM news WHERE news.title LIKE'%$keyword%' OR news.content LIKE '%$keyword%';
        ";
    }    
    else{
        $query .="SELECT news.news_id,news.title,news.content,news.image,news.release_hour FROM news;";
    }
    //print_r($query);
    $statement = $connect->prepare($query);
	$statement->execute();
    // $result = $statement->fetchAll();
	// $total_row = $statement->rowCount();
    $result = $statement->get_result();
	$total_row = $result->fetch_row();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{   
            $output .= '
            <a href="#" id="'. $row['news_id'] .'">
                <div class="tempvideo" style="display: flex;" >
            <img width="200" height="120" src="'. $row['image'] .'" style="border-radius: 10px;">
            <h3 style="max-width:70%; padding-left:20px">
            '. $row['title'] .'
            </h3>
                </div>
            <div> <span style="display: block;overflow: hidden;font-size: 12px;color: #999;padding-bottom:10px;">'. $row['release_hour'] .' giờ trước</span></div>
            </a>
            <details style="padding-bottom:10px;">
                <summary>Chi tiết</summary>
                <p>'. $row['content'] .'</p>
            </details>
            <hr/>
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