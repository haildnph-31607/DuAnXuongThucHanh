<?php
namespace App\Models;
require 'BaseModel.php';
use App\Models\BaseModel;
class NotiView extends BaseModel{
    public function getNotification($id){
        $sql="SELECT * FROM `notifyrents` WHERE id_user=".$id;
        // var_dump($sql);die();
       return $this->ProData($sql);
   }
   public function getNumberNotification($id){
         $sql="SELECT COUNT(id) FROM notifyrents WHERE id_user=$id" ;
         return $this->ProData($sql);
   }
}