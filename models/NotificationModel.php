<?php

namespace App\Models;

use App\Models\BaseModel;

require_once 'BaseModel.php';
class NotificationModel extends BaseModel
{
    public function addNotificationModel($description, $code, $color, $email, $nameUser, $phone, $date, $id_user,$idpr)
    {
        $sql = "INSERT INTO `notification`( `messeger`,`code_product`,`color`,`email`,`name_user`,`phone_number`,`date`,`id_pr`,`id_user`)
         VALUES ('$description','$code','$color','$email','$nameUser','$phone','$date','$idpr','$id_user')";
        //  var_dump($sql);die();
        return $this->ProData($sql);
    }
    public function getNotificationModels($id)
    {
        $sql = "SELECT * FROM notification WHERE 1";
        if($id>=0){
            $sql.=" AND option=$id";
        }
        $sql.=" ORDER BY id DESC";
        return $this->ProData($sql);
    }
    public function getStatusController()
    {
        $sql = "SELECT * FROM notification ORDER BY id DESC";
        return $this->ProData($sql);
    }
    public function getNotify($idOption)
    {
        switch ($idOption) {
            case 0:
                $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:orange;padding:5px 0 5px 20px; color:white;">Chờ Xác Nhận !</div>';
                // $sql="INSERT INTO `notifyrents`( `messeger`, `id_user`) 
                // VALUES ('Yêu cầu của bạn đang chờ xác nhận ?','$id')";
                // $this->ProData($sql);
                break;
            case 1:
                $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:green;padding:5px 0 5px 20px; color:white;">Đang Thuê !</div>';
                // $sql="INSERT INTO `notifyrents`( `messeger`, `id_user`) 
                // VALUES ('Váy sẽ hết hạn thuê vào 7 tới ?','$id')";
                // $this->ProData($sql);
                break;
            case 3:
                $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:red;padding:5px 0 5px 20px; color:white;"> Không liên lạc được!</div>';
                // $sql="DELETE FROM notifyrents WHERE id=$id";
                // $sql="INSERT INTO `notifyrents`( `messeger`, `id_user`) 
                // VALUES ('Chúng tôi không liên lạc được với bạn ?','$id')";

                // $this->ProData($sql);
                break;
            case 2:
                $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:gray;padding:5px 0 5px 20px; color:white;"> Hết Hạn</div>';
                // $sql="INSERT INTO `notifyrents`( `messeger`, `id_user`) 
                // VALUES ('Váy đã hết hạn thuê , Vui lòng trả lại hàng cho shop ?','$id')";
                // $this->ProData($sql);
                break;
        }
        return $pt;
    }
    public function setStatusModel($status, $id)
    {
        $sql = "UPDATE `notification` SET `option`='$status' WHERE id=$id";
        // var_dump($sql);die();
        $this->ProData($sql);
    }
    public function setNotifical($id, $date)
    {
       
        $sql = "INSERT INTO `notifyrents`(`messeger`,`date`, `id_user`) 
        VALUES ('Chúng tôi không liên lạc được với bạn ?','$date','$id')";
        // var_dump($sql);die();
        $this->ProData($sql);
    }
    public function deleteNotify($id){
        $sql = "DELETE FROM notifyrents WHERE id_user=$id";
        return $this->ProData($sql);
    }
    public function setNotificalS($id,$date){
          
        $sql = "INSERT INTO `notifyrents`(`messeger`,`date`, `id_user`) 
        VALUES ('Bạn đã hết hạn thuê váy cưới !','$date','$id')";
        // var_dump($sql);die();
        $this->ProData($sql);
    }
}
