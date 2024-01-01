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
					<h3 class="text-white"><?php echo $lang['gameplay'];?></h3>
					<ul class="breadcrumb-list">
						<li>
							<a style="text-decoration:none;" href="#"><?php echo $lang['menu1'];?></a>
						</li>
						<li>
							<a style="text-decoration:none;" href="#"><?php echo $lang['gameplay'];?></a>
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
			<!--<div class="row">
				<div class="col-lg-12">
					<div class="filter-wrapp">
						<div class="left-area">
							<a href="challenge.php" class="mybtn2"><i class="far fa-sun"></i>All Device</a>
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
				
			</div>-->
			<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
			<!--<?php $i=1; 
                while ($val_array = mysqli_fetch_array($data_gst)) {                       
                  ?>
				<div class="col-sm-4">
					<div class="single-tikit">
					 <a href="challenge-list.php?id=<?php echo $val_array["id"];?>">
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
			<?php } ?> -->
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
						<a style="text-decoration:none;" href="assets/gameplay/rise_of_kingdoms.mp4">
							<img src="assets/images/rise1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">Rise of Kingdoms</h4>
								<h6 class="text-center">Gain power fast as free for beginners</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
						<a style="text-decoration:none;" href="assets/gameplay/pubg.mp4">
							<img src="assets/images/pubg3.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">PUBG</h4>
								<h6 class="text-center">PUBG is still Insane!!!</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
						<a style="text-decoration:none;" href="assets/gameplay/call_off_duty.mp4">
							<img src="assets/images/cod1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">Call of Duty</h4>
								<h6 class="text-center">Warzone solo win gameplay <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-emoji-dizzy" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg></h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				</div>
				<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
						<a style="text-decoration:none;" href="assets/gameplay/pes2020.mp4">
							<img src="assets/images/pes1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">PES2020</h4>
								<h6 class="text-center">It's FCB vs JUV.. Thrilled Finish</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/payday1.mp4">
							<img src="assets/images/payday1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">PAYDAY</h4>
								<h6 class="text-center">Walkthrough!! Bank Robbing 101</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/overwatch1.mp4">
							<img src="assets/images/overwatch1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">OVERWATCH</h4>
								<h6 class="text-center">Hero abilities | How to become one</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				</div>
				<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/nba1.mp4">
							<img src="assets/images/nba1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">NBA 2X20</h4>
								<h6 class="text-center">Female paint Beast that dunks!!</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/mortal1.mp4">
							<img src="assets/images/mortal1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MORTAL COMBAT</h4>
								<h6 class="text-center">God of Fire | Thunder li Kun </h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/monopoly1.mp4">
							<img src="assets/images/monopoly1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MONOPOLY</h4>
								<h6 class="text-center">It's good to own a land!!</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				</div>
				<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/mobile1.mp4">
							<img src="assets/images/mobile1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MOBILE LEGENDS</h4>
								<h6 class="text-center">RIP SAVAGE!! hanibi insane 23 kills</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/mirror1.mp4">
							<img src="assets/images/morror1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MIRROR'S EDGE</h4>
								<h6 class="text-center">The perfect night run</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/minecraft1.mp4">
							<img src="assets/images/minecraft1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MINECRAFT</h4>
								<h6 class="text-center">Build anything i spell, i get</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				</div>
				<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/mario1.mp4">
							<img src="assets/images/mario1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">MARIO</h4>
								<h6 class="text-center">Super mario in the walking lane</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/fortnite1.mp4">
							<img src="assets/images/fortnite1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">FORTNITE</h4>
								<h6 class="text-center">High kill solo arena gameplay</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="single-tikit">
						<div class="image">
							<a style="text-decoration:none;" href="assets/gameplay/fall1.mp4">
							<img src="assets/images/fall1.png" alt="">
						</div>
						<div class="content">
							<div class="content-area">
								<h4 class="text-center">FALL GUYS</h4>
								<h6 class="text-center">Ultimate Knockout gameplay!!</h6>
							</div>
						</div>
						</a>
					</div>
				</div>
				</div>
				
				

			</div>
		</div>
	</section>

	<!-- Raffles section start -->
	


	
<?php include "footer.php"; ?>
</body>

</html>