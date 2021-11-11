<?php
include('../core/DB.php');
$error='';
$flag=0;
if(isset($_POST["submit"]))
{  
 //Name
   if(empty($_POST["name"]))
   {
   $error .= '<p style="color:red">Name is Required</p>';
   $flag=1;
   }
   else
   {
   if(preg_match("/^[0-9]*$/",$_POST["name"]))
   {
   $error .= '<p style="color:red">Only Alphabet allowed in Name</p>';
   $flag=1;
   } 
   }
 //Phone
   if(empty($_POST["phone"]))
   {
   $error .= '<p style="color:red">Phone Number is Required</p>';
   $flag=1;
   }
   else
   {
   if(!preg_match("/^[0-9]*$/",$_POST["phone"]))
   {
   $error .= '<p style="color:red">Only Numbers allowed in Phone</p>';
   $flag=1;
   }
   }
 //Email
   if(empty($_POST["email"]))
   {
   $error .= '<p style="color:red">Email Address is Required</p>';
   $flag=1;
   }
   else
   {
   if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
   {
   $error .= '<p style="color:red">Invalid email format</p>';
   $flag=1;
   }
   }
 //Content
   if(empty($_POST["content"]))
   {
   $error .= '<p style="color:red">Content is Required</p>';
   $flag=1;
   }
 //Success
   if($flag===0)
   {
   $error = '<label style="color:#72c94d">Form Data Submitted</label>';
   $query="
   INSERT INTO CONTACT(customer_name,title,phone,email,content) VALUE ('".$_POST["name"]."','".$_POST["title"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["content"]."')
   ";
   $statement = $connect->prepare($query);
   $statement->execute();
   }
}
echo $error;
?>