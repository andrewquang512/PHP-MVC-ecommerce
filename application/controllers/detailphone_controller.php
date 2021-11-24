<?php 
    session_start();
    $connect = (new DB())->CreateConnection();
    if(isset($_POST["addtocart"]))
    {    
          $Userid=$_SESSION['user_id'];
          $query = "SELECT * FROM bill WHERE CID='$Userid' AND PaySTATUS=0;";
          $statement = $connect->prepare($query);
          $statement->execute();
          $result = $statement->get_result();
          $total_row = $result->fetch_row();
          if($total_row==0){
            $query1 = "INSERT INTO bill(CID,TOTAL,PaySTATUS) VALUE ($Userid,0,False);";
            $statement1 = $connect->prepare($query1);
            $statement1->execute();
            $sta=$connect->prepare("SELECT MAX( BID ) AS BID FROM BILL;");
            $sta->execute();
            $res=$sta->get_result();
            foreach($res as $row)
		    { 
            $Billid=$row['BID'];
            $query2="INSERT INTO phone_in_bill VALUE ($Billid,'".$_POST["phone_id"]."',1);";
            $statement2 = $connect->prepare($query2);
            $statement2->execute();
            }
          }
          else{
            foreach($result as $row)
		    { 
            $Billid=$row['BID'];
            $query3="INSERT INTO phone_in_bill VALUE ($Billid,'".$_POST["phone_id"]."',1);";
            $statement3 = $connect->prepare($query3);
            $statement3->execute();
            }
          }
        }
    ?>