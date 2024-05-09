<?php

namespace App\Models;

use App\Models\BaseModel;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'BaseModel.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
class AccountModel extends BaseModel
{
    public function registerModel($user, $email, $password, $role)
    {
        $sql = "INSERT INTO `user`( `user_name`, `email`, `password`,`role`)
         VALUES ('$user','$email','$password','$role')";
        //  var_dump($sql);die();
        $this->ProData($sql);
    }
    public function loginModel($name, $password)
    {
        $sql = "SELECT * FROM user WHERE user_name='$name' AND password='$password'";
        // var_dump($sql);die();
        return $this->ProData($sql, false);
    }
    public function fogotPasswordModel($email, $randCode,$user)
    {

        $mail = new PHPMailer;
        try {
            //Server settings
            $mail->SMTPDebug =  SMTP::DEBUG_OFF;
            $mail->isSMTP(); // Sử dụng SMTP để gửi mail
            $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
            $mail->SMTPAuth = true; // Bật xác thực SMTP
            $mail->Username = 'nguyenminhkhong2004@gmail.com'; // Tài khoản email
            $mail->Password = 'xqrm bdvw fght jmpr'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
            $mail->SMTPSecure = 'ssl'; // Mã hóa SSL
            $mail->Port = 465; // Cổng kết nối SMTP là 465

            //Recipients
            $mail->setFrom('nguyenminhkhong2004@gmail.com', 'Admin'); // Địa chỉ email và tên người gửi
            $mail->addAddress($email, $user); // Địa chỉ mail và tên người nhận

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Preseden Khoi Phuc Password';
            $mail->Body = "
<h1>DS SHOP</h1>
<h2>Khôi phục mật khẩu</h2>
<hr>
<p>Xin chào '" . $user . "'</p>
<p> Code khôi phục tài khoản của bạn là : '" . $randCode . "'</p>
<p> Vui lòng không chia sẻ mã này cho bất kì ai ! </p>
<p style='font-weight:bold;'> Trân Trọng </p>

";
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
    public function fogotPassModel($password,$id){
        $sql="UPDATE user SET password = '$password' WHERE id=$id";
        $this->ProData($sql);

    }
    public function checkEmailModel($email){
        $sql="SELECT * FROM user WHERE email='$email'";
       
        return $this->ProData($sql);
        

        }
  
}
