<?php
error_reporting(0);
 include 'db.php';
 session_start();
 // if(empty($_SESSION['user_id']))
 //  {
 //  session_destroy();
 //  Header("Location:login.php");exit;
 //  }
 // $user_id=$_SESSION['user_id'];
 // $role=$_SESSION['role'];
 $game_id = $_GET['id'];
 //$lang=$_SESSION['lang'];
 $login_query="select * from tbl_challenges where game_id='$game_id' order by id desc"; 

 $data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());

 include "header.php"; ?>
	<section class="challenge_name" style="background-image: url('assets/images/challenge_list.jpg');">
		<div class="container">
	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><?php echo $lang['challenge_list'];?></h2>
					<ul class="breadcrumb-list">
						<li>
							<a href="#"><?php echo $lang['menu1'];?></a>
						</li>
						<li>
							<a href="#" class="active"><?php echo $lang['challenge_list'];?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	</div>
	</section>
	<!-- Breadcrumb Area End -->
	<section class="games-filter">
		<div class="container">
			<!-- <div class="row">
				<div class="col-lg-12">
					<div class="filter-wrapp">
						<div class="left-area">
							<a href="#" class="mybtn2"><i class="far fa-sun"></i>Select Your Device</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 text-center">
					<div class="icon_device">
						<ul>
							<li><img src="assets/images/android.png"/></li>
							<li><img src="assets/images/apple.png"/></li>
							<li><img src="assets/images/ps.png"/></li>
							<li><img src="assets/images/xbox.png"/></li>
						</ul>
					</div>
				</div>
				
			</div> -->
			<div class="row">
			 <?php $i=1; 
                while ($val_array = mysqli_fetch_array($data_gst)) {                       
                  ?>
				<div class="col-sm-4">
					<div class="single-tikit">
					<a href="gamechallenge.php?id=<?php echo $val_array["id"];?>">
						<div class="image">
							<img src="<?php echo $base_url.$val_array["thumbnail_image"];?>" alt="">
						</div>
						<div class="content">
							<div class="content-area">
							<?php if($_SESSION['lang']=='en') { ?>
								<h4><?php echo $val_array["name"];?></h4>
							<?php } else if($_SESSION['lang']=='sw') {?>
							    <h4><?php echo $val_array["name_sw"];?></h4>
							<?php } else if($_SESSION['lang']=='pg') {?>
							    <h4><?php echo $val_array["name_pg"];?></h4>
							<?php }else if($_SESSION['lang']=='ar') {?>
							    <h4><?php echo $val_array["name_ar"];?></h4>
							<?php }else if($_SESSION['lang']=='mx') {?>
							    <h4><?php echo $val_array["name_mx"];?></h4>
							<?php }else if($_SESSION['lang']=='fr') {?>
							    <h4><?php echo $val_array["name_fr"];?></h4>
							<?php } else {?>
							    <h4><?php echo $val_array["name"];?></h4>
							<?php } ?>
							</div>
						</div>
					</a>
					</div>
				</div>
			<?php } ?>
<!-- 				<div class="col-sm-4">
					<div class="single-tikit">
						<div class="image">
							<img src="assets/images/gallery_img04.jpg" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4>Quick Zap</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-tikit">
						<div class="image">
							<img src="assets/images/gallery_img01.jpg" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4>Dinsaurs</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-tikit">
						<div class="image">
							<img src="assets/images/call.jpg" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4>Call of Duty</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-tikit">
						<div class="image">
							<img src="assets/images/pubg.jpg" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4>Pubg</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single-tikit">
						<div class="image">
							<img src="assets/images/gta.webp" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4>GTA</h4>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</section>

	<!-- Raffles section start -->
	


	

<?php include "footer.php"; ?>
</body>

</html>