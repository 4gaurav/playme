
	<?php
	
	$_GET['lang'] = $_SESSION['lang'];
	
	
	include('languages/lang.'.$_GET['lang'].'.php');
	?>
	<!-- Footer Area Start -->
	<footer class="footer" id="footer">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-left">
					<div class="flogo">
						<a href="#"><img src="assets/images/logo.png" alt=""></a>
					</div>
					
					<div class="social-links">
						<ul>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-pinterest-p"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
					<div class="col-lg-8" >
					<?php if($_SESSION['country']=='qa'||$_SESSION['country']=='kenya'){?>
					<?php } else {?>
					<div class="d-flex justify-content-end">
						<a href="unsub_pormeo.php?subscriptionId=<?php echo $_SESSION['subscriptionId'];?>" class="mybtn1"><?php echo $lang['cancel'];?></a>
					</div>
					<?php } ?>
					<div class="footer-menu" style="margin-top: 65px;">
						<ul>
							<!-- <li>
								<a href="#">
									About
								</a>
							</li>
							<li>
								<a href="#">
									FAQ
								</a>
							</li>
							<li>
								<a href="#">
									Contact
								</a>
							</li>
							<li>
								<a href="#">
									Terms of Service
								</a>
							</li>
							<li>
								<a href="#">
									Privacy
								</a>
							</li> -->
							<?php echo $lang['footer'];?>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<p><?php echo $lang['copyright'];?></p>
					</div>
				</div>
			</div>
		</div>
	</footer> 
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->


	<!-- User Message Modal Start-->
	<div class="modal fade" id="usermessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</div>
				<div class="modal-body">
					<div id="mycontainer">
						<aside>
							<header>
								<input type="text" placeholder="search">
							</header>
							<ul>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status orange"></span>
											offline
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_02.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_03.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status orange"></span>
											offline
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_04.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_05.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status orange"></span>
											offline
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_06.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_07.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_08.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_09.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status green"></span>
											online
										</h3>
									</div>
								</li>
								<li>
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_10.jpg" alt="">
									<div>
										<h2>Prénom Nom</h2>
										<h3>
											<span class="status orange"></span>
											offline
										</h3>
									</div>
								</li>
							</ul>
						</aside>
						<main>
							<header>
								<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
								<div>
									<h2>Vincent Porter</h2>
									<h3>already 1902 messages</h3>
								</div>
							</header>
							<ul id="chat">
								<li class="you">
									<div class="entete">
										<span class="status green"></span>
										<h2>Vincent</h2>
										<h3>10:12AM, Today</h3>
									</div>
									<div class="triangle"></div>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
									</div>
								</li>
								<li class="me">
									<div class="entete">
										<h3>10:12AM, Today</h3>
										<h2>Vincent</h2>
										<span class="status blue"></span>
									</div>
									<div class="triangle"></div>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
									</div>
								</li>
								<li class="me">
									<div class="entete">
										<h3>10:12AM, Today</h3>
										<h2>Vincent</h2>
										<span class="status blue"></span>
									</div>
									<div class="triangle"></div>
									<div class="message">
										OK
									</div>
								</li>
								<li class="you">
									<div class="entete">
										<span class="status green"></span>
										<h2>Vincent</h2>
										<h3>10:12AM, Today</h3>
									</div>
									<div class="triangle"></div>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
									</div>
								</li>
								<li class="me">
									<div class="entete">
										<h3>10:12AM, Today</h3>
										<h2>Vincent</h2>
										<span class="status blue"></span>
									</div>
									<div class="triangle"></div>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
									</div>
								</li>
								<li class="me">
									<div class="entete">
										<h3>10:12AM, Today</h3>
										<h2>Vincent</h2>
										<span class="status blue"></span>
									</div>
									<div class="triangle"></div>
									<div class="message">
										OK
									</div>
								</li>
							</ul>
							<footer>
								<textarea placeholder="Type your message"></textarea>
								<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
								<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
								<a href="#">Send</a>
							</footer>
						</main>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- User Message Modal End-->

	<!-- User Notification Modal Start-->
	<div class="modal fade" id="usernotification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Notification</h4>
					<div class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</div>
				</div>
				<div class="modal-body">
					<div class="single-notification">
						<div class="img">
							<img src="assets/images/n1.png" alt="">
						</div>
						<div class="content">
							<div class="top-area">
								<h4>Update Announcement</h4>
								<p>2021-03-07  -  23:50:21 </p>
							</div>
							<div class="middle-area">
								<h6>Dear player:</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dictum dictum congue. Duis fringilla malesuada lobortis. In ultricies venenatis magna ut mollis. Nam sit amet arcu lobortis, porta nisl non, egestas felis. Nulla et finibus massa. Ut varius tristique elit et gravida.</p>
							</div>
							<div class="bottom-area">
								<p>Games 24.Game Team</p>
								<span>April 30 2021</span>
							</div>
						</div>
					</div>
					<div class="single-notification">
						<div class="img">
							<img src="assets/images/n1.png" alt="">
						</div>
						<div class="content">
							<div class="top-area">
								<h4>Update Announcement</h4>
								<p>2021-03-07  -  23:50:21 </p>
							</div>
							<div class="middle-area">
								<h6>Dear player:</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dictum dictum congue. Duis fringilla malesuada lobortis. In ultricies venenatis magna ut mollis. Nam sit amet arcu lobortis, porta nisl non, egestas felis. Nulla et finibus massa. Ut varius tristique elit et gravida.</p>
							</div>
							<div class="bottom-area">
								<p>Games 24.Game Team</p>
								<span>April 30 2021</span>
							</div>
						</div>
					</div>
					<div class="single-notification">
						<div class="img">
							<img src="assets/images/n1.png" alt="">
						</div>
						<div class="content">
							<div class="top-area">
								<h4>Update Announcement</h4>
								<p>2021-03-07  -  23:50:21 </p>
							</div>
							<div class="middle-area">
								<h6>Dear player:</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dictum dictum congue. Duis fringilla malesuada lobortis. In ultricies venenatis magna ut mollis. Nam sit amet arcu lobortis, porta nisl non, egestas felis. Nulla et finibus massa. Ut varius tristique elit et gravida.</p>
							</div>
							<div class="bottom-area">
								<p>Games 24.Game Team</p>
								<span>April 30 2021</span>
							</div>
						</div>
					</div>
					<div class="single-notification">
						<div class="img">
							<img src="assets/images/n1.png" alt="">
						</div>
						<div class="content">
							<div class="top-area">
								<h4>Update Announcement</h4>
								<p>2021-03-07  -  23:50:21 </p>
							</div>
							<div class="middle-area">
								<h6>Dear player:</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dictum dictum congue. Duis fringilla malesuada lobortis. In ultricies venenatis magna ut mollis. Nam sit amet arcu lobortis, porta nisl non, egestas felis. Nulla et finibus massa. Ut varius tristique elit et gravida.</p>
							</div>
							<div class="bottom-area">
								<p>Games 24.Game Team</p>
								<span>April 30 2021</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- User Notification Modal End-->
	
	<!-- SignIn Area Start -->
	<div class="modal fade login-modal sign-in" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-body">
					<ul class="nav l-nav" role="tablist">
						<li role="presentation" class="active"><a href="#pills-m_login" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
						<li role="presentation"><a href="#pills-m_register" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $lang['register'];?></a></li>
						
						</ul>
						<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane active" id="pills-m_login" role="tabpanel" aria-labelledby="pills-m_login-tab">
							<div class="header-area">
								<h4 class="title"><?php echo $lang['login_welcome'];?></h4>
							</div>
							<div class="form-area">
								<form action="" method="POST">
									<div class="form-group">
											<input type="email" class="input-field" id=""  placeholder="Email" name="email" required="">
									</div>
									<div class="form-group">
											<input type="password" class="input-field" id="input-email"  placeholder="Password" name="password" required="">
									</div>
									<div class="form-group">
										<span><?php echo $lang['forgot'];?><a href="forgot-password.php"><?php echo $lang['recover'];?></a></span>
									</div>
									<div class="form-group">
										<button type="submit" name="commit" value="commit" class="mybtn2">Login</button>
									</div>
								</form>
							</div>
							
						</div>
						<div class="tab-pane " id="pills-m_register" role="tabpanel" aria-labelledby="pills-m_register-tab">
							<div class="header-area">
								<!--<span class="bunnus_btn">
									<span><?php echo $lang['contest_pool'];?></span>
									<h4>$500</h4>
								</span>-->
								<h4 class="title"><?php echo $lang['play_intro'];?></h4>
									<p class="text">
										<?php echo $lang['play_entry'];?>
									</p>
							</div>
							<div class="form-area">
								<form action="" method="POST">
									<!--<div class="form-group">
											<input type="text" class="input-field" id="input-name"  placeholder="Username" name="name" required="">
									</div>
									<div class="form-group">
											<input type="email" class="input-field" id="input-email"  placeholder="Enter your Email" name="email" required="">
									</div>
									<div class="form-group">
											<input type="number" class="input-field" id="input-email"  placeholder="Enter your Number" name="number" >
									</div>
									<div class="form-group">
											<input type="password" class="input-field" id="input-password"  placeholder="Enter your password" name="password" required="">
									</div>
									<div class="form-group">
											<input type="password" class="input-field" id="input-con-password"  placeholder="Enter your Confirm Password" name="confirm_password" required="">
									</div>-->
									<div class="form-group">
										<div class="check-group">
												<input type="checkbox" class="check-box-field" id="input-terms" checked>
												<label for="input-terms">
														<?php echo $lang['agree'];?><a href="termsofuse.php"><?php echo $lang['torms'];?></a> <?php echo $lang['and'];?>  <a href="termsofuse.php"><?php echo $lang['privcy'];?></a>
												</label>
										</div>
									</div>
									<div class="form-group">
									<?php if($_SESSION['country']=='kenya'){?>
							        <?php } else {?>
										<button type="submit" class="mybtn2" name="register" value="register"><a href="https://www.esports.playme.in.net/landing_page_port.php"><?php echo $lang['register'];?></a></button>
									<?php } ?>
									</div>
								</form>
							</div>
						</div>
						</div>
					
					
				</div>
			</div>
			</div>
	</div>
	<!-- SignIn Area End -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
	
    <script src="new_css_file/suraj.js"></script>
	<!-- jquery -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/swiper.js"></script>
	<!-- popper
	<script src="assets/js/popper.min.js"></script> -->
	<!-- bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<!-- plugin js-->
	<script src="assets/js/plugin.js"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  wrapAround: true,
  fullScroll: true
});
	</script>
	<!-- MpusemoverParallax JS-->
	<script src="assets/js/TweenMax.js"></script>
	<script src="assets/js/mousemoveparallax.js"></script>
	<!-- main -->
	<script src="assets/js/main.js"></script>
	<script>
	$(document).ready(function(){
		$(".icon_device ul li").on('click',function(){
			$(this).addClass("active")
		})
	})
	</script>
	<script>
	$(document).ready(function($) {
    var tabwrapWidth= $('.tabs-wrapper').outerWidth();
    var totalWidth=0;
    $("ul li").each(function() { 
      totalWidth += $(this).outerWidth(); 
    });
    if(totalWidth > tabwrapWidth){
      $('.scroller-btn').removeClass('inactive');
    }
    else{
      $('.scroller-btn').addClass('inactive');
    }

    if($("#scroller").scrollLeft() == 0 ){
      $('.scroller-btn.left').addClass('inactive');
    }
    else{
       $('.scroller-btn.left').removeClass('inactive');
    }
		var liWidth= $('#scroller li').outerWidth();
		var liCount= $('#scroller li').length;
		var scrollWidth = liWidth * liCount;

				$('.right').on('click', function(){
          $('.nav-tabs').animate({scrollLeft: '+=200px'}, 300);
          console.log($("#scroller").scrollLeft() + " px");
				});
				
				$('.left').on('click', function(){
					$('.nav-tabs').animate({scrollLeft: '-=200px'}, 300);
				});
      scrollerHide()
     
      function scrollerHide(){
        var scrollLeftPrev = 0;
        $('#scroller').scroll(function () {
            var $elem=$('#scroller');
            var newScrollLeft = $elem.scrollLeft(),
                width=$elem.outerWidth(),
                scrollWidth=$elem.get(0).scrollWidth;
            if (scrollWidth-newScrollLeft==width) {
                $('.right.scroller-btn').addClass('inactive');
            }
            else{

                 $('.right.scroller-btn').removeClass('inactive');
            }
            if (newScrollLeft === 0) {
              $('.left.scroller-btn').addClass('inactive');
            }
            else{

                 $('.left.scroller-btn').removeClass('inactive');
            }
            scrollLeftPrev = newScrollLeft;
        });
      }
	});</script>