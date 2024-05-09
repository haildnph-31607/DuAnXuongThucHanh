<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	Boxicons
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
	<link rel="stylesheet" href="./Style/css/style.css">

	<title>Admin</title>
</head>
<body>



	<section id="sidebar">
		<a href="index.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Trang Chủ</span>
				</a>
			</li>
			<li>
				<a href="?href=category">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Categorys</span>
				</a>
			</li>
			<li>
				<a href="?href=product">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Product</span>
				</a>
			</li>
			<li>
				<a href="?href=notification">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Notification</span>
				</a>
			</li>
			<li style="margin-left: 20px;">
				<a href="?href=post">
				<ion-icon name="newspaper-outline"></ion-icon>
					<span  style="margin-left: 10px;" class="text" sty>Post</span>
				</a>
			</li>
			<li  style="margin-left: 20px;">
				<a  href="?href=variation">
				<ion-icon name="layers-outline"></ion-icon>
					<span style="margin-left: 10px;" class="text">variation</span>
				</a>
			</li>
			<li  style="margin-left: 20px;">
				<a href="?href=color">
				<ion-icon name="color-palette-outline"></ion-icon>
					<span style="margin-left: 10px;" class="text">color</span>
				</a>
			</li>
			<li  style="margin-left: 20px;">
				<a href="?href=statistical">
				<ion-icon name="receipt-outline"></ion-icon>
					<span style="margin-left: 10px;" class="text">statistical</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="?href=category">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="?href=logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
    <section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="" class="nav-link">Trang Chủ</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="?href=notification" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>	
			<a href="" class="profile">
				<img src="./Style/img/people.png">
			</a>
		</nav>	
</section> 