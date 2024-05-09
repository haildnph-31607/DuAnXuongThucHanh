<section class="breadcrumb-area">
	<div class="container">
		<style>
			.alert {
				position: absolute;
				right: 20px;
				top: 100px;
				z-index: 1000px;
				border: 2px solid greenyellow;
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

			.alertNo {
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

			.alert>ion-icon {
				color: green;
				font-size: 30px;
			}

			.alert>span {
				position: absolute;
			}

			.alertNo>ion-icon {
				color: green;
				font-size: 30px;
			}

			.alertNo>span {
				position: absolute;
			}
		</style>
		<div class="row">
			<div class="col-lg-12">
				<h4 class="title">
					Forgot Password
				</h4>
				<ul class="breadcrumb-list">
					<li>
						<a href="?href=/">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<span><i class="fas fa-chevron-right"></i> </span>
					</li>
					<li>
						<a href="?href=fogot">Forgot Password</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php if (isset($_SESSION['sucessMailer'])) {
		echo $_SESSION['sucessMailer'];
	};
	unset($_SESSION['sucessMailer']); ?>
	<?php if (isset($_SESSION['NoCode'])) {
		echo $_SESSION['NoCode'];
	};
	unset($_SESSION['NoCode']); ?>
	<script>
		var letAlert = document.querySelector('.alert');
		var constAlert = setTimeout(() => {
			letAlert.style.right = '-500px';
		}, 2500);
		var letAlertNo = document.querySelector('.alertNo');
		var constAlert1 = setTimeout(() => {
			letAlertNo.style.right = '-500px';
		}, 2500);
	</script>
</section>
<!-- Breadcrumb Area End -->

<!-- Signin Area Start -->
<?php
if (isset($_SESSION['randCode'])) { ?>
	<section class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="sign-form">
						<div class="heading">
							<h4 class="title">
								Password Reset
							</h4>
							<p class="subtitle">
								Enter Code Send Email
							</p>
						</div>
						<form class="form-group mb-0" action="?href=fogot" method="post">
					
							<input class="form-control " type="text" name="code" placeholder="Code">
							<button class="bigbtn" type="submit" name="submit1">Submit</button>
							<p class="reg-text text-center mb-0">Not registered? <a href="?href=register">Register Now</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else { ?>

	<section class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="sign-form">
						<div class="heading">
							<h4 class="title">
								Password Reset
							</h4>
							<p class="subtitle">
								Enter your email below to proceed.
							</p>
						</div>
						<form class="form-group mb-0" action="?href=fogot" method="post">
						<div class="err" style="color:red;"><?php if (isset($_SESSION['errFogot']['checkEmail'])) {
																	echo '*' .$_SESSION['errFogot']['checkEmail'];
																} ;?></div>
							<div class="err" style="color:red;"><?php if (isset($_SESSION['errFogot']['email'])) {
																	echo '*' . $_SESSION['errFogot']['email'];
																} ?></div>
							<?php unset($_SESSION['errFogot']); ?>
							<input class="form-control " type="email" name="email" placeholder="Email Address">
							<button class="bigbtn" type="submit" name="submit">Send Code</button>
							<p class="reg-text text-center mb-0">Not registered? <a href="?href=register">Register Now</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>
// <!-- Signin Area End -->