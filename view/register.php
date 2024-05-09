
<style>


.err{
	color:red;
	
}
.success{
	width: 300px;
	/* border: 1px solid black; */
	top: 100px;
	right: 100px;
	text-align: center;
	height: 100px;
	padding-top: 10px;
	border-radius: 9px;
	background-color: darkslategray;
	position: absolute;
	right: 100px;
	transition: all 1s;
}
.success>ion-icon {
	color: greenyellow;
	font-size: 30px;
}
.success>.yes{
	color: aquamarine;
}
.sucess>a{
	color: aquamarine;
}
</style>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					Register
				</h4>
				<ul class="breadcrumb-list">
					<li>
						<a href="index.php">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<span><i class="fas fa-chevron-right"></i> </span>
					</li>
					<li>
						<a href="?href=register">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Area End -->

<!-- Signin Area Start -->
<section class="auth">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10">
				<div class="sign-form">
				<?php if(isset($_SESSION['success'])){
					echo $_SESSION['success'];
				}?>
				<?php unset($_SESSION['success']);?>
					<div class="heading">
						<h4 class="title">
							Create account
						</h4>
						<p class="subtitle">
							WEB BY LE DUC NGOC HAI DEVELOPER
						</p>
					</div>
					<form class="form-group mb-0" action="?href=register" method="post">
					<div class="err"><?php if(isset($_SESSION['err']['user'])){ echo '*'.$_SESSION['err']['user']; } ?></div>

						<input class="form-control " type="text" name="yourname" placeholder="Enter User Name">
						<div class="err"><?php if(isset($_SESSION['err']['email'])){ echo '*'.$_SESSION['err']['email']; } ?></div>

						<input class="form-control " type="email" name="email" placeholder="Email Address">
						<div class="err"><?php if(isset($_SESSION['err']['password'])){ echo '*'.$_SESSION['err']['password'] ;} ?></div>

						<input class="form-control" type="password" name="password" placeholder="Password">
						<div class="err"><?php if(isset($_SESSION['err']['cpassword'])){ echo '*'.$_SESSION['err']['cpassword']; } ?></div>

						<input class="form-control" type="password" name="c-password" placeholder="Confirm  Password">
                         <?php unset($_SESSION['err']);?>
						<div class="custom-control custom-checkbox  d-flex">
							<input type="checkbox" class="custom-control-input" id="remember" name="confirm">
							<label class="custom-control-label ml-2" for="remember">I agree to the <a href="#">terms and conditions</a> </label>
						</div>
						<button class="bigbtn" type="submit" name="submit">Create Account</button>
						<p class="reg-text text-center mb-0">Already have an acocunt? <a href="?href=login">LogIn</a></p>
					</form>

					
				</div>
			</div>
		</div>
	</div>
	<script>
		var alert =document.querySelector('.success');
	
			
		
		var inter = setTimeout(()=>{
			alert.style.opacity='0';
		},3000);
	</script>
</section>


<!-- Signin Area End -->