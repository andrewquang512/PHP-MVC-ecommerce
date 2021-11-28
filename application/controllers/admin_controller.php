<?php
require_once(ROOT .'/application/controllers/base_controller.php');
require_once(ROOT .'/application/models/CustomerModel.php');
require_once(ROOT .'/application/models/ContactModel.php');
require_once(ROOT .'/application/models/PhoneModel.php');
require_once(ROOT .'/application/models/ContentModel.php');

class AdminController extends BaseController{
    function __construct(){
      if(!isset($_SESSION)) { 
        session_start();
        if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
          $this->folder = 'admin';
        }
        else{
          header('Location: index.php?controller=pages&action=home');
        } 
      }
      else{
        header('Location: index.php?controller=pages&action=home');
      } 
      // if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
      //   if(!isset($_SESSION)) { 
      //     session_start(); 
      //   }
        $this->folder = 'admin';
      // }
      // else{
      //   header('Location: index.php?controller=pages&action=home');
      // }
    }

    public function home(){
      $this->render('index');
    }

    public function customermanage(){
      // if(isset($_GET['status'])){
      //   $id = $_GET['status'];
      //   $customer_model = new CustomerModel();
      //   $customer_info = $customer_model->GetAll();
      //   //? put the value $customer_info into name 'customers', to call: $data['customers']
      //   $data = array('customers' => $customer_info, 'status' => $id);
      //   $this->render('customer_manage', $data);
      // }
      $customer_model = new CustomerModel();
      $customer_info = $customer_model->GetAll();
      $data = array('customers' => $customer_info);
      $this->render('customer_manage', $data);
    }
    public function updatecustomer(){
      $customer_id = $_POST['customer_id'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $addr = $_POST['addr'];
      $customer_model = new CustomerModel();
      $result = $customer_model->UpdateByCustomerId($customer_id, $first_name ,$last_name, $user_name, $phone, $email, $addr);
      // if($result == "Record updated successfully"){
      //   header('Location: index.php?controller=admin&action=customermanage&status=success');
      // } else{
      //   header('Location: index.php?controller=admin&action=customermanage&status=fail');
      // }
      header('Location: index.php?controller=admin&action=customermanage');
    }
    public function addcustomer(){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $pwd = $_POST['password'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $addr = $_POST['addr'];
      $customer_model = new CustomerModel();
      $result = $customer_model->CreateCustomer($pwd, $first_name ,$last_name, $user_name, $phone, $email, $addr);
      header('Location: index.php?controller=admin&action=customermanage');
    }
    public function deletecustomer(){
      $customer_id = $_POST['customer_id'];
      $customer_model = new CustomerModel();
      $result = $customer_model->DeleteByCustomerId($customer_id);
      header('Location: index.php?controller=admin&action=customermanage');
    }

    public function contactmanage(){
      $contacts = new ContactModel();
      $contacts_info = $contacts->GetAll();
      $data = array('contacts' => $contacts_info);
      $this->render('contact_manage', $data);
    }
    
    public function deletecontact(){
      $contact_id = $_POST['contact_id'];
      $contacts = new ContactModel();
      $result = $contacts->DeleteByContactId($contact_id);
      header('Location: index.php?controller=admin&action=contactmanage');
    }

    public function commentmanage(){
      $this->render('comment_manage');
    }
    public function contentmanage(){
      $news = new ContentModel();
      $news_info = $news->GetAll();
      $data = array('news' => $news_info);
      $this->render('content_manage', $data);
    }

    public function deletecontent(){
      $content_id = $_POST['content_id'];
      $news = new ContentModel();
      $result = $news->DeleteByContenttId($content_id);
      header('Location: index.php?controller=admin&action=contentmanage');
    }
    public function updatecontent(){
      print_r($_POST);
      $content_id = $_POST['content_id'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $image= $_POST['thumbnail'];
      $release_hour= $_POST['release_hour'];
      $news = new ContentModel();
      $result = $news->UpdateByContenttId($content_id,$title,$content,$image,$release_hour);
      header('Location: index.php?controller=admin&action=contentmanage');
    }
    
    public function addcontent(){
      $title = $_POST['title'];
      $content = $_POST['content'];
      $image= $_POST['thumbnail'];
      $release_hour= $_POST['release_hour'];
      $news = new ContentModel();
      $result = $news->CreateContent($title,$content,$image,$release_hour);
      header('Location: index.php?controller=admin&action=contentmanage');
    }

    public function productmanage(){
      $products = new PhoneModel();
      $products_info = $products->GetAll();
      $data = array('products' => $products_info);
      $this->render('product_manage', $data);
    }
    public function deleteproduct(){
      $product_id = $_POST['product_id'];
      $phone = new PhoneModel();
      $result = $phone->DeleteByPhoneId($product_id);
      header('Location: index.php?controller=admin&action=productmanage');
    }
    public function updateproduct(){
      print_r($_POST);
      //? getting data from form
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $temp_product_price = $_POST['product_price'];
      $product_price = (float)$temp_product_price;
      $product_price = number_format($product_price, 5, '.', '');
      $temp_product_quantity = $_POST['product_quantity'];
      $product_quantity = (float)$temp_product_quantity;
      $product_brand = $_POST['product_brand'];
      $product_ram = $_POST['product_ram'];
      $product_storage = $_POST['product_storage'];
      $temp_product_gift = $_POST['product_gift'];
      $product_gift = (float)$temp_product_gift;
      $product_gift = number_format($product_gift, 5, '.', '');
      $product_link = $_POST['product_link'];

      //? getting old data from form for replacing purpose
      $old_product_name = $_POST['old_product_name'];
      $old_product_ram = $_POST['old_product_ram'];
      $old_product_storage = $_POST['old_product_storage'];
      $old_product_brand = $_POST['old_product_brand'];
      $old_product_link = $_POST['old_product_link'];

      $products = new PhoneModel();
      $products_info = $products->UpdateByPhoneId($product_id,$product_name,$product_price,$product_quantity,$product_brand,"Phone$product_id/1.png",$product_ram,$product_storage,$product_gift,$product_link);

      if($_FILES["fileToUpload"]){
        print("i am here 1");
        $filename = $_FILES["fileToUpload"]["name"];
        $tempname = $_FILES["fileToUpload"]["tmp_name"];
        unlink(ROOT ."/public/assets/images/dtdd/Phone$product_id/1.png");
        mkdir(ROOT ."/public/assets/images/dtdd/Phone".$product_id, 0777, true);
        $folder=ROOT ."/public/assets/images/dtdd/Phone".$product_id."/".$filename;
        move_uploaded_file($tempname,$folder);
        rename(ROOT ."/public/assets/images/dtdd/Phone".$product_id."/".$filename,ROOT ."/public/assets/images/dtdd/Phone".$product_id."/1.png");
        if($old_product_link == $product_link){
          $file = ROOT."/application/views/detailed/$product_link.php";
          file_put_contents($file,str_replace($old_product_name,$product_name,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_ram,$product_ram,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_storage,$product_storage,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_brand,$product_brand,file_get_contents($file)));
        }
        else{
          rename(ROOT."/application/views/detailed/$old_product_link.php", ROOT."/application/views/detailed/$product_link.php");
          $file = ROOT."/application/views/detailed/$product_link.php";
          file_put_contents($file,str_replace($old_product_name,$product_name,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_ram,$product_ram,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_storage,$product_storage,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_brand,$product_brand,file_get_contents($file)));
        }
      }
      else{
        if($old_product_link == $product_link){
          print("i am here 2");
          //? if link doesn't change
          $file = ROOT."/application/views/detailed/$product_link.php";
          print($file);
          file_put_contents($file,str_replace($old_product_name,$product_name,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_ram,$product_ram,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_storage,$product_storage,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_brand,$product_brand,file_get_contents($file)));
        }
        else{
          print("i am here 3");
          //? if link changed
          rename(ROOT."/application/views/detailed/$old_product_link.php", ROOT."/application/views/detailed/$product_link.php");
          $file = ROOT."/application/views/detailed/$product_link.php";
          file_put_contents($file,str_replace($old_product_name,$product_name,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_ram,$product_ram,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_storage,$product_storage,file_get_contents($file)));
          file_put_contents($file,str_replace($old_product_brand,$product_brand,file_get_contents($file)));
        }
      }
      header('Location: index.php?controller=admin&action=productmanage');
    }

    public function addproduct(){
      $product_name = $_POST['product_name'];
      $temp_product_price = $_POST['product_price'];
      $product_price = (float)$temp_product_price;
      $product_price = number_format($product_price, 5, '.', '');
      $temp_product_quantity = $_POST['product_quantity'];
      $product_quantity = (float)$temp_product_quantity;
      $product_brand = $_POST['product_brand'];
      $product_ram = $_POST['product_ram'];
      $product_storage = $_POST['product_storage'];
      $temp_product_gift = $_POST['product_gift'];
      $product_gift = (float)$temp_product_gift;
      $product_gift = number_format($product_gift, 5, '.', '');
      $product_link = $_POST['product_link'];
      $filename = $_FILES["fileupdate"]["name"];
      $tempname = $_FILES["fileupdate"]["tmp_name"];
      $products = new PhoneModel();
      // $products_id = $products->GetLastPhoneID(); 
      // $new_products_id = $products_id + 1;
      $products_info = $products->CreatePhone($product_name,$product_price,$product_quantity,$product_brand,"PhoneTemp/1.png",$product_ram,$product_storage,$product_gift,$product_link);
      if($products_info == true){
        $products_id = $products->GetLastPhoneID();
        $store_image = "Phone$products_id/1.png";
        $products_update_image =  $products->UpdatePhoneImage($store_image, $products_id);
        if($products_update_image == true){
          if (!file_exists(ROOT ."/public/assets/images/dtdd/Phone".$products_id)) {
            mkdir(ROOT ."/public/assets/images/dtdd/Phone".$products_id, 0777, true);
            $folder=ROOT ."/public/assets/images/dtdd/Phone".$products_id."/".$filename;
            if (move_uploaded_file($tempname,$folder))  {
              $msg = "Image uploaded successfully";
              //? Rename file intro 1.PNG
              rename(ROOT ."/public/assets/images/dtdd/Phone".$products_id."/".$filename,ROOT ."/public/assets/images/dtdd/Phone".$products_id."/1.png");
              
              //? Create a new file in details folder based on template
              $newcontent = file_get_contents(ROOT."/application/views/detailed/template.php");
              $newcontent = str_replace('PRODUCT_RAM', $product_ram, $newcontent);
              $newcontent = str_replace('PRODUCT_STORAGE', $product_storage, $newcontent);
              $newcontent = str_replace('PRODUCT_NAME', $product_name, $newcontent);
              $newcontent = str_replace('PRODUCT_BRAND', $product_brand, $newcontent);
              $newcontent = str_replace('PRODUCT_IMAGE', ROOT ."/public/assets/images/dtdd/Phone".$products_id."/1.png", $newcontent);
              //? write to a new file
              $fp = fopen(ROOT . "/application/views/detailed/$product_link.php","wb");
              fwrite($fp,$newcontent);
              fclose($fp);
            }
            else{
                $msg = "Failed to upload image";
            }
          }
        }

      }
      header('Location: index.php?controller=admin&action=productmanage');
    }
}