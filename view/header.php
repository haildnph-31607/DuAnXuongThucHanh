<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from geniusdevs.com/themeforest/prolab/probucket/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 11:10:27 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Prolab - Product Landing Page </title>
  <!-- favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <!-- animate -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- AOS css -->
  <link rel="stylesheet" href="assets/css/aos.css">
  <!-- stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  
  <style>
 
.admin{
  color: white;
  margin: 25px 0 0 40px;
  cursor: pointer;
}
.notification{
  margin-top: 14px;
  position: relative;
  /* margin-left: 20px; */
  /* margin-right: -20px; */
  cursor: pointer;
  position: absolute;
  margin-left: 870px;

}
.notification>ion-icon{
  font-size: 35px;
  color: blue;

}
.notification>.number_notify{
  background-color: red;
  color: white;
  width: 22px;
  height: 22px;
  font-size: 12px;
  text-align: center;
  border-radius: 50%;
  position: absolute;
  top: -1px;
  right: 0px;
}
.viewNoti{
  width: 500px;
  height: auto;
  padding-bottom: 90px;
  position: absolute;
  background-color: white;
  
 
  border-radius: 5px;
  box-shadow: 0 0 5px blue;
  right: -500px;
  transition: .4s all;
}
.viewNoti>h3{
  margin-top: 10px;
  margin-left: 200px;
}
.viewN{
  width: 500px;
  height: 80px;
  border: 1px solid lightgray;
  border-left: 4px solid blue;
  position: relative;
}
.viewN>ion-icon{
  font-size: 34px;
}
.magic{
  right: 0;
}
.viewN>span{
  position: absolute;
  top: 4px;
  left: 40px;
}
.viewN>h5{
  margin-left: 5px;
}
  </style>
  
</head>
<?php 


require_once './models/NotiView.php';
use App\Models\NotiView;
$notiS = new NotiView();
 if(isset($_SESSION['user'])){ 
  $listNoti = $notiS->getNotification($_SESSION['user']['id']);
  $numberNoti = $notiS->getNumberNotification($_SESSION['user']['id']);
  // var_dump($numberNoti);die();
  $NUM = $numberNoti[0]["COUNT(id)"];
  // var_dump($NUM);die();
 }?>



<body>

  <!-- preloader area start -->
  <!-- <div class="preloader" id="preloader">
    <div class="preloader-inner">
      <div class="cube-wrapper">
        <div class="cube-folding">
          <span class="leaf1"></span>
          <span class="leaf2"></span>
          <span class="leaf3"></span>
          <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">Loading</span>
      </div>
    </div>
  </div> -->
  <!-- preloader area end -->

  <!-- Navebar Area start -->
  <header class="navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a href="">
              <img src="./assets/images/logo.png" alt="" width="300px">
            </a>
            <!-- <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo-color.png" alt="">
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
              
             
                <li class="nav-item">
                  <a class="nav-link" href="#pricing">Sản Phẩm</a>
                </li>
   
               
              
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Liên Hệ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?href=blog">Bài Viết</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài Khoản
                  </a>
                  <div class="dropdown-menu">
  
                    <?php if(isset($_SESSION['user'])){?>
                  
                   
                      <a class="dropdown-item" href="?href=logout"><i class="fas fa-chevron-right"></i>Đăng Xuất</a>
                      <a class="dropdown-item" href="?href=profile"><i class="fas fa-chevron-right"></i>Tôi</a>
                      <?php }else{ ?>
                        <a class="dropdown-item" href="?href=login"><i class="fas fa-chevron-right"></i>Đăng Nhập</a>
                        <a class="dropdown-item" href="?href=register"><i class="fas fa-chevron-right"></i>Register</a>
                     
                        <?php } ?>
                        <?php if(isset($_SESSION['user'])){?>
                          <?php if($_SESSION['user']['role']==2){?>
                            <a class="dropdown-item" href="http://localhost/FSSTUDIO/admin/"><i class="fas fa-chevron-right"></i>Quản Trị ADMIN</a>
                            <?php }}?>

                          
                   
                    <a class="dropdown-item" href="?href=fogot"><i class="fas fa-chevron-right"></i>Forgot Password</a>
                   
                  </div>
                </li>
                <li class="admin"><?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['user_name'] . '<ion-icon name="chevron-down-outline"></ion-icon>';} ?></li>
               
              </ul>
              <div class="notification">
                <ion-icon name="notifications-outline"></ion-icon>
                <?php if(isset($NUM)){ ?>
                <div class="number_notify">
               <?php  echo $NUM; ?>
                   </div><?php }?>
                </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  
<script>
   window.addEventListener('scroll',()=>{
    var admin =document.querySelector('.admin');
    admin.style.color='black';
  })
  window.addEventListener('scroll',()=>{
 var scr =setInterval(()=>{
 
    var admin =document.querySelector('.admin');
    admin.style.color='white';

 },2000)
})
</script>

   


<div class="viewNoti" >
    <h3>Notifical</h3>
    
     <?php if(!empty($listNoti)){?>
      <?php foreach($listNoti as $value){ ?>

    <div class="viewN">
    <ion-icon name="person-circle-outline"></ion-icon> <span>Admin</span> <span style="margin-left: 80px;"><?php echo $value['date'] ?></span>
     <h5>
     <?php echo $value['messeger'] ?>
     </h5>
    </div>
   <?php }} ?>



</div>
<script>
  var viewBoxNotify =document.querySelector('.viewNoti');
  var clickNotify =document.querySelector('.notification');
  clickNotify.addEventListener('click',function(){
    viewBoxNotify.classList.toggle('magic');
  })
</script>
  </header>