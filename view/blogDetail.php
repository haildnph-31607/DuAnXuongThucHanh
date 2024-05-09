<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">
                <?php echo $blogDetail[0]['title'];?>
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
                        <a  >Blog Details</a>
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
				<div class="col-lg-12">
          <div class="single-blog-details">
              <div class="img">
                  <img src="<?php echo $blogDetail[0]['imgpg'] ?>" alt="g">
              </div>
              <div class="content">
                  <ul class="top-meta">
                      <li>
                          <p class="date">
                              <?php echo $blogDetail[0]['date'];?>
                          </p>
                      </li>
                      <li>
                          <p class="post-by">
                              By, Admin
                          </p>
                      </li>
                  </ul>
                  <a href="#">
                      <h4 class="title">
                      <?php echo $blogDetail[0]['title'];?>
                      </h4>
                  </a>
                  <div class="text-area">
                      <p>
                      <?php echo $blogDetail[0]['content'];?>
                      </p>
                      
                      <blockquote>
                          <p>
                             Bạn đã thử chuwaaa ?
                          </p>
                      </blockquote>
                      <p>
                   <?php  echo $blogDetail[0]['contentDetail'] ?>
                      </p>
                      <div class="img">
                  <img src="<?php echo $blogDetail[1]['imgpg'] ?>" alt="g">
              </div> <br> <br>
                      <p>
                          Hãy để lại ý kiến của mình nhé .....
                      </p>
                  </div>
              </div>
          </div>
         
          <div class="write-comment">
              <h4 class="title">
                  Write Comment :
              </h4>
              <form action="#">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" class="input-field borderd" placeholder="Your name">
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="input-field borderd" placeholder="Email here">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <textarea class="input-field borderd textarea" placeholder="Write here"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <button class="mybtn2" type="submit">
                        <span>Comment</span>
                      </button>
                    </div>
                  </div>
                </form>
          </div>
				</div>
			</div>
		</div>
	</section>