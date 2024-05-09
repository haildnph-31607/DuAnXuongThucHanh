<?php
namespace App\ControllerAD;
use App\Models\NotificationModel;
require '../models/NotificationModel.php';
class NotificationController{
    protected $notify;
    public function __construct(){
     $this->notify=new NotificationModel();
    }
    public function getNotificationController(){
       if(isset($_POST['search-outline'])){
        $listNotification = $this->notify->getNotificationModels($_POST['id']);
       }else{
        $listNotification = $this -> notify->getStatusController();
       }

        // var_dump($listNotification);die();
      
    //    var_dump($idOption);die();
//    if($_SERVER['REQUEST_METHOD']=="POST"){
//     $idOption = $_POST['idSatuss'];
   
    // $getStatus = $this->notify->getNotify($idOption);
//    }
       if(isset($_POST['submit'])){
        $option = $_POST['idStatus'];
        $id=$_POST['id'];
        $this->notify->setStatusModel($option,$id);
        header('location:'.$_SERVER['HTTP_REFERER']);
       }
        include_once './View/notification/list.php';
    }
}