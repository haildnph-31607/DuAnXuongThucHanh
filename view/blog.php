<style>
    a>ion-icon{
        font-size: 36px;
        position: absolute;
        right: 20px;
        top: 340px;
        color: white;
    }
</style>
<section class="breadcrumb-area">
   <?php if(isset($_SESSION['user'])){?>
    <?php if($_SESSION['user']['role']==2){?>
        <a href="?href=addBlog"><ion-icon title="ADD BLOG ADMIN " name="duplicate-outline"></ion-icon></a>
        <?php }}?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">
                    Blog 
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
                        <a href="?href=blog">Blog </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->


	<!-- Blog Page Grid Area Start -->
	<section class="blog-page single-blog-area">
		<div class="container">
			<div class="row">
                <?php foreach($listBlog as $value):?>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
							<a href="?href=blogDetail&id=<?php echo $value['id'] ?>"><div class="img">
						<img src="./<?php echo $value['img'] ?>" alt="">
						</div></a>
						<div class="content">
							<ul class="top-meta">
								<li>
									<p class="date">
                                    <?php echo $value['date'] ?>
									</p>
								</li>
								<li>
									<p class="post-by">
										By, Admin
									</p>
								</li>
							</ul>
							<a href="?href=blogDetail&id=<?php echo $value['id'] ?>">
								<h4 class="title">
                                <?php echo $value['title'] ?>
								</h4>
							</a>
						</div>
					</div>
				</div>
                <?php endforeach ?>
				
			</div>
		
		</div>
	</section>