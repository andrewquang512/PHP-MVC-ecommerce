<?php 
  session_start();
  if(isset($_SESSION['user_id'])){
    $uid = $_SESSION['user_id'];
    exit($uid);
  }
  else{
      exit('0');
  }
?>
