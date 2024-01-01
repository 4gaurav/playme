<?php 
	include "header.php"; 
    $login_query="select * from tbl_games order by id desc";
 	$data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());

 	$login_query="select * from tbl_tournament where date(start_date) <=curdate() order by id desc";
	$live_tournament = mysqli_query($con1,$login_query) or die(mysqli_error());
	
	$login_query="select * from tbl_gameplay order by id desc";
	$live_gameplay = mysqli_query($con1,$login_query) or die(mysqli_error());

 	//$login_query="select * from tbl_tournament where date(start_date) >curdate() order by id desc";
	$login_query="select * from tbl_tournament where date(start_date) <=curdate() order by id desc";
	$upcoming_tournament = mysqli_query($con1,$login_query) or die(mysqli_error());

    $login_query="select * from tbl_user_challenges where status=1 order by id desc limit 5";
	$data_gst1 = mysqli_query($con1,$login_query) or die(mysqli_error());
	

	$login_query="select * from tbl_user_tournament where status=1 order by id desc limit 5";
	$data_gst2 = mysqli_query($con1,$login_query) or die(mysqli_error());
?>

	<!-- Hero Area Start -->
	<div class="hero-area">
		<img class="shape parallax5" src="assets/images/home/h2-shape.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content">
						<div class="content">
							<h5 class="subtitle">
								<?php echo $lang['banner_heading'];?>
							</h5>
							<h1 class="title">
								<img src="assets/images/text.png" alt="">
							</h1>
							<?php if($_SESSION['country']=='qa'||$_SESSION['country']=='kenya'){?>
							<?php } else {?>
							<div class="links">
								<a href="<?php echo $lang['landingpage'];?>" class="mybtn1"><?php echo $lang['play_now'];?></a>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero Area End -->

	
	<section class="aboutus-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-md-5 p-0 d-none d-sm-block">
					<div class="aboutbg"></div>
				</div>
				<div class="col-lg-7 col-md-7 p-0">
					<div class="short_about">
						<h2><?php echo $lang['about_heading'];?></h2>
						<p><?php echo $lang['about_us'];?></p>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</section> 

	<!-- Game play area start -->
	<section class="ex-lottery pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<a href="challenge.php"><h2 class="title ">
							<?php echo $lang['challenge_heading'];?>
						</h2></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="home_challenge row ex-lottery-slider">
				<?php $i=1; 
                   while ($val_array = mysqli_fetch_array($data_gst)) {                       
                  ?>
						
						<div class="single-tikit item">
							<a href="challenge-list.php?id=<?php echo $val_array["id"];?>">
								<div class="image">
									<img src="<?php echo $base_url.$val_array["thumbnail_image"];?>" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4><?php echo $val_array["name"];?></h4>
									</div>
								</div>
							</a>
						</div>
				<?php } ?>
						<!-- <div class="col-sm-4">
						<div class="single-tikit">
								<div class="image">
									<img src="assets/images/game/dota.jpg" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4>Dota 2</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
						<div class="single-tikit">
								<div class="image">
									<img src="assets/images/game/fortnite.jpg" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4>Fortnite</h4>
									</div>
								</div>
							</div>
						</div> -->
						
					
				</div>
			</div>
		</div>
	</section>
	
	
	<section class="ex-lottery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<a href="tournaments.php"><h2 class="title ">
							<?php echo $lang['upcoming_heading'];?>
						</h2></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="home_challenge row ex-lottery-slider">
				<?php $i=1; 
                   while ($val_array = mysqli_fetch_array($upcoming_tournament)) {                       
                  ?>
						
						<div class="single-tikit item">
							<a href="javascript:void(0);">
								<div class="image">
									<img src="<?php echo $base_url.$val_array["thumbnail_image"];?>" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4><?php echo $val_array["name"];?></h4>
									</div>
								</div>
							</a>
						</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>


	<section class="ex-lottery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2 class="title ">
							<?php echo $lang['gameplay'];?>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="home_challenge row ex-lottery-slider">
				<?php $i=1; 
                   while ($val_array_new = mysqli_fetch_array($live_gameplay)) {                       
                  ?>
						
						<div class="single-tikit item">
							<a href="gameplay.php">
								<div class="image">
									<img src="<?php echo $base_url.$val_array_new["thumbnail_image"];?>" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4><?php echo $val_array_new["name"];?></h4>
									</div>
								</div>
							</a>
						</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	
	
<!--	<section class="ex-lottery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2 class="title ">
							<?php echo $lang['live_heading'];?>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="home_challenge row ex-lottery-slider">
				<?php $i=1; 
                   while ($val_array_new = mysqli_fetch_array($live_gameplay)) {                       
                  ?>
						
						<div class="single-tikit item">
							<a href="gameplay.php?id=<?php echo $val_array_new["id"];?>">
								<div class="image">
									<img src="<?php echo $base_url.$val_array_new["thumbnail_image"];?>" alt="">
								</div>
								<div class="content">
									<div class="top-area">
										<div class="top-bar">
											<div class="progress-bar"></div>
											<div class="main-bar"></div>
										</div>
									</div>
									<div class="content-area">
										<h4><?php echo $val_array_new["name"];?></h4>
									</div>
								</div>
							</a>
						</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section> -->

	
	
	
<!-- <section class="game-play-section">
		<img class="left-img" src="assets/images/game-play/left-img.png" alt="">
		<img class="right-img" src="assets/images/game-play/right-img.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h5 class="subtitle">
							BROWSE TOURNAMENTS
						</h5>
						<h6 class="text">
							Find the perfect tournaments for you. Head to head matches where you pick the game, rules and prize.
						</h6>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
				  <label for="inputState">Status</label>
				  <select id="inputState" class="form-control">
					<option selected="">Status</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputState1">Search</label>
				  <select id="inputState1" class="form-control">
					<option selected="">Search</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputState2">Team Size</label>
				  <select id="inputState2" class="form-control">
					<option selected="">Team Size</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputState3">Entry Fee</label>
				  <select id="inputState3" class="form-control">
					<option selected="">Entry Fee</option>
				  </select>
				</div>
			</div>
			<div class="row justify-content-center">
				
				<div class="col-lg-12">
									<div class="single-turnaments">
										<div class="left-area">
											<div class="single-play">
												<div class="image">
													<img src="assets/images/game-play/3.png" alt="">
												</div>
												<div class="contant">
													<a href="tournaments2.html" class="mybtn2">JOin Now</a>
													
												</div>
											</div>
											<h4>37 People Playing</h4>
													<ul>
														<li>
															<a href="#">
																<img src="assets/images/player/sm1.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="assets/images/player/sm2.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="assets/images/player/sm3.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="assets/images/player/sm4.png" alt="">
															</a>
														</li>
														<li>
															<span>
																32+
															</span>
														</li>
													</ul>
										</div>
										<div class="right-area">
											<div class="r-top-area">
												<h4>Temporada Dragón de las Nubes</h4>
												<div class="list">
													<p>
														Fortnite: Battle Royale
													</p>
													<span></span>
													<p>
														PS4 &amp; XB1
													</p>
												</div>
											</div>
											<div class="r-bottom-area">
												<div class="rl-area">
													<span class="title">Time left before finish:</span>
													<div class="timecounter">
														<i class="far fa-clock"></i>
														<div data-countdown="2021/12/15"><span>00:</span><span>00:</span><span>00:</span><span>00</span></div>
													</div>
													<img src="assets/images/s-box.png" alt="">
												</div>
												<div class="rr-area">
													<h5>Prize pool</h5>
													<h3>$8000</h3>
													<div class="time-area">
														<h6>3/11/21 6:00 AM - 3/18/21 5:59 AM</h6>
														<img src="assets/images/bg-time.png" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
				
				
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="#" class="b-all-btn">Browser All <img src="assets/images/arrow.png" alt=""></a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Latest arcive area start -->
	<section class="latest-arcive">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sh-wrpper">
						<img src="assets/images/arcive/i1.png" alt="">
						<div class="section-heading">
							<h5 class="subtitle">
									<?php echo $lang['challenge_heading'];?>
							</h5>
							<h2 class="title ">
								<?php echo $lang['top_players'];?>
							</h2>
						</div>
					</div>
					<!-- <div class="l-arcive-box">
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa1.png" alt="">
								<h6>Mathis</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa2.png" alt="">
								<h6>Rogers</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa3.png" alt="">
								<h6>Stewart</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
					</div> -->

									<div class="l-arcive-box2-wrapper">
										<div class="l-arcive-box2">
										<?php 
										$i=4;
										while ($val_array1 = mysqli_fetch_array($data_gst1)) { ?>
											<div class="s-a-b">
												<div class="left">
													<img src="assets/images/arcive/sa<?php echo $i; ?>.png" alt="">
													<div class="content">
														<div class="left2">
															<img src="assets/images/arcive/m2.png" alt="">
														</div>
														<div class="right2">
															<h4><?php echo $val_array1["name"]; ?></h4>
														
														</div>
													</div>
												</div>
												
											</div>

										<?php $i++;
											} ?>
											
											
										</div>
									</div>

				</div>
				<div class="col-lg-6">
					<div class="sh-wrpper md-pt-50">
						<img src="assets/images/arcive/i2.png" alt="">
						<div class="section-heading">
							<h5 class="subtitle">
								<?php echo $lang['menu3'];?>
							</h5>
							<h2 class="title ">
								<?php echo $lang['top_players'];?>
							</h2>
						</div>
					</div>
				<!-- 	<div class="l-arcive-box">
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa4.png" alt="">
								<h6>Harmon</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa5.png" alt="">
								<h6>Mendez</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
						<div class="s-a-b">
							<div class="left">
								<img src="assets/images/arcive/sa6.png" alt="">
								<h6>Munoz</h6>
							</div>
							<div class="right">
								<h6>25.8772200 $</h6>
								<img src="assets/images/arcive/mony.png" alt="">
							</div>
						</div>
					</div> -->

									<div class="l-arcive-box2-wrapper">
										<div class="l-arcive-box2">
										<?php 
										$i=4;
										while ($val_array1 = mysqli_fetch_array($data_gst2)) { ?>
											<div class="s-a-b">
												<div class="left">
													<img src="assets/images/arcive/sa<?php echo $i; ?>.png" alt="">
													<div class="content">
														<div class="left2">
															<img src="assets/images/arcive/m2.png" alt="">
														</div>
														<div class="right2">
															<h4><?php echo $val_array1["name"]; ?></h4>
														
														</div>
													</div>
												</div>
												
											</div>

										<?php $i++;
											} ?>
											
											
										</div>
									</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Latest arcive area End -->

	<!-- join us area start -->
	<section class="join_us">
		<img class="l-image" src="assets/images/joinus_left_img.png" alt="">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-7">
					<div class="section-heading content-left">
						<h5 class="subtitle">
							<?php echo $lang['subtitle'];?>
						</h5>
						<h2 class="title ">
							<?php echo $lang['title'];?>
						</h2>
						<h6 class="text">
							<?php echo $lang['get_started'];?>
						</h6>
						<!-- <a href="#" class="mybtn1">Join US</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- join us area  end -->

	<!-- How play area start -->
	<section class="how-to-play pb-5">
		<img class="left-img" src="assets/images/h-play/left-img.png" alt="">
		<img class="right-img" src="assets/images/h-play/right-img.png" alt="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<!--<h5 class="subtitle">
							<?php //echo $lang['smartly'];?>
						</h5>-->
						<h2 class="title ">
							<?php echo $lang['how_play'];?>
						</h2>
						<h6 class="text">
							<?php echo $lang['skills'];?>
						</h6>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="assets/images/h-play/ic1.png" alt="">
						<h4><?php echo $lang['sign_up'];?></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="assets/images/h-play/ic2.png" alt="">
						<h4><?php echo $lang['compete_challenge'];?></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="assets/images/h-play/ic2.png" alt="">
						<h4><?php echo $lang['upload_video'];?></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="s-h-play">
						<img src="assets/images/h-play/ic3.png" alt="">
						<h4><?php echo $lang['get_reward'];?></h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="<?php echo $lang['landingpage'];?>" class="mybtn1"><?php echo $lang['get_started_now'];?></a>
				</div>
			</div>
		</div>

	</section>
	<!-- How play area  end -->
<?php include "footer.php"; ?>

</body>

</html>