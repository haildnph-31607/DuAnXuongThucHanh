
<section class="breadcrumb-area">
    <div class="container">
		<style>
	
		</style>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">
                    Forgot Password
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
                        <a href="?href=fogot">Verify</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<?php if(isset($_SESSION['sucessMailer'])){
		echo $_SESSION['sucessMailer'];
	};unset($_SESSION['sucessMailer']);?>
	 <script>
    var letAlert =document.querySelector('.alert');
    var constAlert = setTimeout(()=>{
      letAlert.style.right='-500px';
    },2500);
   </script>
</section>
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
						<form class="form-group mb-0" action="?href=fogotPass&id=<?php echo $_GET['id'] ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                            <div class="err" style="color:red;"><?php if (isset($_SESSION['fogot']['password'])) {
																	echo '*' . $_SESSION['fogot']['password'];
																} ?></div>
						  <input class="form-control " type="password" name="password" placeholder="Password New">
                          <div class="err" style="color:red;"><?php if (isset($_SESSION['fogot']['cpassword'])) {
																	echo '*' . $_SESSION['fogot']['cpassword'];
																} ?></div>
                          <input class="form-control " type="password" name="cpassword" placeholder="Confirm Password New">
                       <?php unset($_SESSION['fogot']);?>
						  <button class="bigbtn" type="submit" name="submit">Submit</button>
						  <p class="reg-text text-center mb-0">Not registered? <a href="?href=register">Register Now</a></p>
						</form>
					  </div>
				</div>
			</div>
		</div>
	</section>