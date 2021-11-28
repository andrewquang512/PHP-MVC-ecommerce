<?php
class ContentModel{

    private $news_id;
    private $title;
    private $content;
    private $image;
    private $release_hour;

    public function getnews_id () { return $this->news_id; }
    private function setnews_id ($news_id) { $this->news_id = $news_id; }

    public function gettitle () { return $this->title; }
    private function settitle ($title) { $this->title = $title; }

    public function getcontent () { return $this->content; }
    private function setcontent ($content) { $this->content = $content; }

    public function getimage () { return $this->image; }
    private function setimage ($phone) { $this->image = $image; }

    public function getrelease_hour () { return $this->release_hour; }
    private function setrelease_hour ($release_hour) { $this->release_hour = $release_hour; }

    public function __construct(
        $news_id = '',
        $title = '',
        $content = '',
        $image = '',
        $release_hour = '',
        
      ) {
        $this->news_id = $news_id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->release_hour = $release_hour;
    }

    
    public static function GetAll () {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM news");
      $statement->bind_result($news_id, $title, $content, $image, $release_hour);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new ContentModel($news_id, $title, $content, $image, $release_hour);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }
    
    // public static function DeleteByContactId ($id) { 
    //   $db = (new DB())->CreateConnection();
    //   $statement = $db->prepare("DELETE FROM contact WHERE id='$id'");
    //   if ($statement->execute()) {
    //     return "Contact deleted successfully";
    //   } else {
    //     return "Error deleting contact: ";
    //   }
    // }
}
?>