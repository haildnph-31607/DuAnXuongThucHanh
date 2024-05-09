<?php

namespace App\Controller;
use App\Models\AccountModel;

require './models/AccountModel.php';
class AccountController
{
    public $account;
    public $email;
    public function __construct()
    {
        $this->account = new AccountModel();
    }
    public function FogotController()
    {
        // unset($_SESSION['randCode']);
        if (isset($_POST['submit'])) {
          
            $email = $_POST['email'];
            $this->email=$email;
            // var_dump($email);die();
            $randCode = rand(10000, 20000);
            if (empty($email)) {
                $_SESSION['errFogot']['email'] = 'Vui lòng điền Email !';
            } else {
                $regexEmail = '/^\\S+@\\S+\\.\\S+$/';
                if (!preg_match($regexEmail, $email)) {
                    $_SESSION['errFogot']['email'] = 'Vui lòng điền đúng định dạng Email';
                }else{
                    $checkE = $this->account->checkEmailModel($email); 
                    $_SESSION['emailCillen']  = $email;
                    // var_dump($checkE);die();                                                                                       
                    if(!is_array($checkE)){
                        // $user = $checkE['name_user'];
                        $_SESSION['errFogot']['checkEmail'] ='Email không tồn tại vui lòng nhập lại !';
                    }
                }
               
            }  
          
            if (empty($_SESSION['errFogot'])) {
                // var_dump($email);die();
                $checkEmail = $this->account->checkEmailModel($email); 
                $user = $checkEmail[0]['user_name'];
                
                
               $this->account->fogotPasswordModel($email, $randCode, $user);
            //    var_dump($ss);die();
                $_SESSION['randCode'] = $randCode;
                $_SESSION['sucessMailer'] = "<div class='alert'>
                <ion-icon name='shield-checkmark-outline'></ion-icon> <span>Gửi Mã Code Thành Công !  </span>
                 
                </div>";
            }
        
        }
        if(isset($_POST['submit1'])){
            $code = $_POST['code'];
            // var_dump($_SESSION['randCode']);die();
               
            if($code==$_SESSION['randCode']){
                $checkEmail = $this->account->checkEmailModel($_SESSION['emailCillen']); 
                // var_dump($checkEmail);die();
                header('location:?href=fogotPass&id='.$checkEmail[0]['id']);
                unset($_SESSION['emailCillen']);
            }else{
                $_SESSION['NoCode'] = "<div class='alertNo'>
                <ion-icon name='shield-outline'></ion-icon> <span>Bạn Nhập Sai Mã OTP  </span>
                 
                </div>";
            }
        }
     
        include_once './view/fogot.php';
    }
    public function fogotPassController(){
    //    var_dump($_GET['id']);die();
        if(isset($_POST['submit'])){
           
           $id = $_POST['id'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            if(empty($password)){
                $_SESSION['fogot']['password'] = 'Vui lòng điền Mật Khẩu mới !';
            }
            if($cpassword!=$password){
                $_SESSION['fogot']['cpassword'] = 'Vui lòng điền trùng mới Mật Khẩu mới !';

            }
            if(empty($_SESSION['fogot'])){
                // var_dump('hihih');die();
                $this->account->fogotPassModel($password,$id);
                unset($_SESSION['randCode']);
                header('location:index.php');
                
            }
        }
        include_once './view/fogotPass.php';
    }
    public function RegisterController()
    {


        if (isset($_POST['submit'])) {
            //    var_dump('halo');die();
            $user = $_POST['yourname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['c-password'];
            $role = 1;
            if (empty($user)) {
                $_SESSION['err']['user'] = 'Vui lòng nhập username';
            } else {
                if (strlen($user) < 6) {
                    $_SESSION['err']['user'] = 'UserName phải trên 6 kí tự !';
                }
            }
            if (empty($email)) {
                $_SESSION['err']['email'] = 'Vui lòng nhập email';
            } else {
                $regexEmail = '/^\\S+@\\S+\\.\\S+$/';
                if (!preg_match($regexEmail, $email)) {
                    $_SESSION['err']['email'] = 'Vui lòng điền đúng định dạng Email';
                }
            }
            if (empty($password)) {
                $_SESSION['err']['password'] = 'Vui lòng nhập password';
            } else {
                $regexPass = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
                if (!preg_match($regexPass, $password)) {
                    $_SESSION['err']['password'] = 'Vui lòng điền Password có 1 kí tự đặc biệt và 1 chữ Hoa';
                }
            }
            if (empty($cpassword)) {
                $_SESSION['err']['cpassword'] = 'Vui lòng nhập confirm password';
            } else {

                if ($cpassword != $password) {
                    $_SESSION['err']['cpassword'] = 'Vui lòng điền đúng mật khẩu';
                }
            }
            if (empty($_SESSION['err'])) {
                $this->account->registerModel($user, $email, $password, $role);
                $_SESSION['success'] = '<div class="success">
				<ion-icon name="checkmark-circle-outline"></ion-icon> 
				 <div class="yes">Succesfully</div>
				 <a href="?href=login">Login Here</a>
				</div>';
            }
        }
        include_once './view/register.php';
    }
    public function LoginController()
    {
        // unset($_SESSION['errLogin']);
        if (isset($_POST['submit'])) {
            $name = $_POST['yourname'];
            $password = $_POST['password'];
            // var_dump($name,$password);die();
            if (empty($name)) {
                $_SESSION['errLogin']['name'] = 'Vui lòng điền User Name';
            }
            if (empty($password)) {
                $_SESSION['errLogin']['password'] = 'Vui lòng điền Password';
            }
            if (empty($_SESSION['errLogin'])) {

                $checkLogin = $this->account->loginModel($name, $password);
                //  var_dump($checkLogin);die();
                if (is_array($checkLogin)) {
                    //  var_dump('haaha');die();
                    var_dump($checkLogin);
                    $_SESSION['user'] = $checkLogin;
                     header('location:index.php');
                } else {

                    $_SESSION['error']['login'] = " <div class='alert'>
                <ion-icon name='shield-outline'></ion-icon> <span>Đăng nhập thất bại  </span>
                 
                </div>";
                }
            }
        }
        include_once './view/login.php';
    }
    public function LogoutController(){
        unset($_SESSION['user']);
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
}
