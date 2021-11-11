<?php

//Newscontroller.php

include('../core/DB.php');
if(isset($_POST["search"]))
{   
    $query="";
    if(!empty($_POST["keyword"]))
	{ 
        $query .="SELECT news.news_id,news.title,news.content,news.image,news.release_hour FROM news,new_keywords WHERE news.news_id=new_keywords.news_id AND new_keywords.tag_name IN('".$_POST["keyword"]."');
        ";
    }    
    else{
        $query .="SELECT news.news_id,news.title,news.content,news.image,news.release_hour FROM news;";
    }
    //print_r($query);
    $statement = $connect->prepare($query);
	$statement->execute();
    $result = $statement->fetchAll();
	$total_row = $statement->rowCount();
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