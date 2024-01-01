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
	if(!empty($_GET['device_type'])) {
		$device_type = $_GET['device_type'];
		if($device_type=='1'){
			$device_type1 = 'active';
		} elseif ($device_type=='2') {
			$device_type2 = 'active';
		} elseif ($device_type=='3') {
			$device_type3 = 'active';
		} elseif ($device_type=='4') {
			$device_type4 = 'active';
		}
		$login_query="select * from tbl_games where device_type='$device_type' order by id desc";
	} else {
		$login_query="select * from tbl_games where device_type=1 order by id desc";
		$device_type1 = 'active';
	}
  

 $data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());

 include "header.php"; 
 ?>
	<section class="challenge_name" style="background-image: url('assets/images/about-bc.jpg');">
		<div class="container">
				<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--<h3 class="text-white">Challenges</h3>-->
					<h3><?php echo $lang['menu2'];?></h3>
					<ul class="breadcrumb-list">
						<li>
							<!--<a style="text-decoration:none;" href="#">Home</a>-->
							<a><?php echo $lang['menu1'];?></a>
						</li>
						<li>
							<!--<a style="text-decoration:none;" href="#">Challenges</a>-->
							<a><?php echo $lang['menu2'];?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		</div>
	</section>
	<!-- Breadcrumb Area Start -->

	<!-- Breadcrumb Area End -->
	<section class="games-filter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="filter-wrapp">
						<div class="left-area">
							<a style="text-decoration:none;" href="challenge.php" class="mybtn2"><i class="far fa-sun"></i>Devices</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 text-center">
					<div class="icon_device">
						<ul>
							<li class="<?php echo $device_type1; ?>"><a href="challenge.php?device_type=1"><img src="assets/images/android.png"/></a></li>
							<li class="<?php echo $device_type2; ?>"><a href="challenge.php?device_type=2"><img src="assets/images/apple.png"/></a></li>
							<li class="<?php echo $device_type3; ?>"><a href="challenge.php?device_type=3"><img src="assets/images/ps.png"/></a></li>
							<li class="<?php echo $device_type4; ?>"><a href="challenge.php?device_type=4"><img src="assets/images/xbox.png"/></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="row">
			 <?php $i=1; 
                while ($val_array = mysqli_fetch_array($data_gst)) {                       
                  ?>
				<div class="col-sm-4">
					<div class="single-tikit">
					 <a style="text-decoration:none;" href="challenge-list.php?id=<?php echo $val_array["id"];?>">
						<div class="image">
							<img src="<?php echo $base_url.$val_array["thumbnail_image"];?>" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4><?php echo $val_array["name"];?></h4>
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