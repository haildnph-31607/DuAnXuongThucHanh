<style>
    .err{
        color: red;
    }
    .errr{
        z-index: 1000px;
    }
    .alert {
      position: absolute;
      right: 20px;
      top: 100px;
      z-index: 1000px;
      border: 2px solid red;
      width: 300px;
      height: 70px;
      border-radius: 10px;
      /* padding-left: 10px;
      padding-top: 20px; */
      background-color: azure;
      font-size: 20px;
      font-weight: bold;
      transition: all 1s;
      /* position: relative; */
    }
    .alert>ion-icon{
      color: red;
      font-size: 30px;
    }
    .alert>span{
      position: absolute;
    }
</style>
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">
                    Login
                </h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</section>
<div class="errr">
    <?php
  if(isset( $_SESSION['error']['login'])){
    echo "<div class='alert'>
    <ion-icon name='shield-outline'></ion-icon> <span>Đăng nhập thất bại  </span>
     
    </div>";
  }
    unset( $_SESSION['error']['login']);
  ?>
     <script>
    var letAlert =document.querySelector('.alert');
    var constAlert = setTimeout(()=>{
      letAlert.style.right='-500px';
    },2500);
   </script>
</div>
<!-- Breadcrumb Area End -->

<!-- <div class="alert_acc">
    <ion-icon style="color: aquamarine;" name="shield-checkmark-outline"></ion-icon> <span>Thành Công !!</span>
    </div>
    <button class="btn-acc">Alert</button> -->

    <!-- <script>
      var alert =document.querySelector('.alert_acc');
      var button =document.querySelector('.btn-acc');
      button.addEventListener('click',function(){
        alert.style.right='20px';
     
      });
    
    </script> -->
	<!-- Signin Area Start -->
	<section class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="sign-form">
						<div class="heading">
							<h4 class="title">
									Login
							</h4>
							<p class="subtitle">
									Sign in use the website
							</p>
						</div>
						<form class="form-group mb-0" action="?href=login" method="post">
                        <div class="err"><?php if(isset($_SESSION['errLogin']['name'])){ echo '*'.$_SESSION['errLogin']['name']; } ?></div>

						  <input class="form-control " type="text" name="yourname" placeholder="User Name">
                          <div class="err"><?php if(isset($_SESSION['errLogin']['password'])){ echo '*'.$_SESSION['errLogin']['password']; } ?></div>

						  <input class="form-control" type="password" name="password" placeholder="Password">
						  <div class="custom-control custom-checkbox  d-flex">
							<input type="checkbox" class="custom-control-input" id="remember">
							<label class="custom-control-label ml-2" for="remember">Remember Me</label>
							<span class="ml-auto"><a href="?href=fogot">Forgot Password ?</a></span>
						  </div>
                          
						  <button class="bigbtn" type="submit" name="submit">Log In</button>
						  <p class="reg-text text-center mb-0">Don't have an account? <a href="register.html">Register Now</a></p>
						</form>
                        <?php unset($_SESSION['errLogin'])?>
					  </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Signin Area End -->
