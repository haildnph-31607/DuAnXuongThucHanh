<?php
namespace App\Controller;
use App\Models\NotificationModel;
require './models/NotificationModel.php';
class NotificationController{
    public $notification;
    public function __construct(){
      $this->notification= new NotificationModel;
    }
    public function addNotificationController(){
        if(isset($_POST['submit'])){
          $idpr = $_POST['idpr'];
            $code = $_POST['code'];
            $color = $_POST['color'];
            $email = $_POST['email'];
            $phone = $_POST['phoneNumber'];
            $description = $_POST['description'];
            $id_user = $_POST['idUser'];
            $nameUser = $_POST['NameUser'];
            $date=date('Y-m-d H:m:s');
            $this->notification->addNotificationModel( $description, $code,$color,$email,$nameUser,$phone,$date,$id_user,$idpr);
            setcookie('yes',"<div class='success'>
            <ion-icon name='checkmark-circle-outline'></ion-icon> 
             <div class='yes'>Succesfully</div>
            
            </div>",time()+5);
              header('location:'.$_SERVER['HTTP_REFERER']);
        }
        // include_once './'
    }
}