<style>
button.owl-prev {
    position: absolute;
    left: 0px;
    top: 37%;
    transform: translateY(-50%);
    background-color: white!important;
    width: 20px;
    height: 20px;
    border-radius: 100%!important;
    color: #000!important;
}
ul.nav.nav-tabs {
    border: none;
}

dl.pairs.pairs--inline {
    display: inline-block;
    margin-right: 60px;
    width: 23%;
}

.p-tournament__bar {
    padding: 30px 40px;
}

dl.pairs.pairs--inline dt span {
    color: #fff;
}
  button.owl-next {
    position: absolute;
    right: 0px;
    top: 37%;
    transform: translateY(-50%);
    background-color: white!important;
    width: 20px;
    height: 20px;
    border-radius: 100%!important;
    color: #000!important;
}
.owl_1 .owl-item .item li img {
    width: 100px;
    text-align: center;
    margin: 0 auto;
    height: 100px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: 10px;
    background: #3B076B !important;
    border-radius: 10px;
}
.owl-prev, .owl-next {
    box-shadow: inset 0px 0px 7px 5px #00a2ff;
    width: 35px;
    height: 35px;
    text-align: center;
    border-radius: 50%;
}
.owl-prev i, .owl-next i {
    line-height: 35px;
}
.owl-prev {
    position: absolute;
    left: 0;
    top: 40%;
}

.owl-next {
    position: absolute;
    right: 0;
    top: 40%;
}  

</style>
<script type="text/javascript">
	 function start_timer(start_date, end_date, key) {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      // dayMonth = "04/30/",
      // birthday = dayMonth + yyyy;
  birthday = start_date;
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days"+key).innerText = Math.floor(distance / (day)),
          document.getElementById("hours"+key).innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes"+key).innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds"+key).innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  		}
</script>
<?php
	error_reporting(0);
	include 'db.php';
	session_start();
		 if(!empty($_POST['submit_entry'])) {
			 //$challenge_id = $_POST['challenge_id'];
			 $user_id = $_SESSION['user_id'];
        	 $name = $_SESSION['name'];
        	 // $challenge_name = $val_array['name'];
        	 // $available_rewards = $val_array['available_rewards'];
        	 $tournament_id = $_POST['tournament_id'];
        	 $tournament_name = $_POST['tournament_name'];
        	 $available_rewards = $_POST['available_rewards'];
        	 if(!empty($user_id)){
			//  if (!empty($_FILES['video']['name'])) {
			//      $uploads = $_FILES['video'];
			//      $file_name = pathinfo($uploads['name'], PATHINFO_FILENAME);
			//      $file_name = str_replace(' ', '_', $file_name);
			//      $setNewFileName = $file_name . "_" . rand(000000, 999999);
			//      $extension = pathinfo($uploads['name'], PATHINFO_EXTENSION);
			//      $file = $setNewFileName . '.' . $extension;  
			//      // $thumbnail_image = $upload_path . $file; 
			//      $video =  $file; 
			//      move_uploaded_file($uploads['tmp_name'],$upload_path.$file);
			// }
         $query = "SELECT * FROM  tbl_user_tournament WHERE tournament_id = '".$tournament_id."' and user_id = '".$user_id."' and status=1"; 
        $result = mysqli_query($con1,$query);
        $numrows = mysqli_num_rows($result);
            if ($numrows == 0){
	    $login_query="insert into  tbl_user_tournament (name,user_id,tournament_id,created_at,tournament_name,reward_points) values ('$name','$user_id','$tournament_id',now(),'$tournament_name','$available_rewards')";
		$login_query = mysqli_query($con1,$login_query) or die(mysqli_error($con1));
		$message = 'New Tournament Entry Submitted Successfully. Please upload Challenge video';
		Header("Location:profile.php?message=$message");exit;
							 } else {
	    $message = 'This Tournament request already exist..';
							 }
			} else {
		$message = 'Please login first for submitting your Tournament';		
			}
		}

	$login_query="select * from tbl_tournament where date(start_date) <=curdate() and fake_timer_days=0 order by id desc";
	$live_tournament = mysqli_query($con1,$login_query) or die(mysqli_error());

	$login_query="select * from tbl_tournament where date(start_date) >curdate() or fake_timer_days>0 order by id desc";
	$upcoming_tournament = mysqli_query($con1,$login_query) or die(mysqli_error());
 	include "header.php"; 
?>
	<section class="challenge_name" style="background-image: url('assets/images/bc/turnament.png');">
	<div class="container">
	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<!--<h3 class="text-white">Touraments</h3>-->
				<h3><?php echo $lang['menu3'];?></h3>
					<ul class="breadcrumb-list">
						<li>
							<!--<a style="text-decoration:none;" href="#">Home</a>-->
							<a><?php echo $lang['menu1'];?></a>
						</li>
						<li>
							<!--<a style="text-decoration:none;" href="#">Touraments</a>-->
							<a><?php echo $lang['menu3'];?></a>
							
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
			<div class="row">
				<div class="col-lg-12">
					<div class="filter-wrapp">
						<div class="left-area">
							<a style="text-decoration:none;" href="#" class="mybtn2"><i class="far fa-sun"></i><?php echo $lang['select_device'];?></a>
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
				
			</div>
			
		</div>
	</section>
	<div class="section p-5 tour_owl" style="background-color:#3B076B;">
<div class="container">
  
  <ul class="nav nav-tabs">
        <div class="owl_1 owl-carousel owl-theme">
        	<?php $i=0; 
					                while ($val_array = mysqli_fetch_array($upcoming_tournament)) {
					                $active_class = '';   
					                if($i=='0'){
					                	$active_class = "active";
					                }                    
					            ?>
            <div class="item">
                <li class="<?php echo $active_class; ?>"><a data-toggle="tab" href="#home<?php echo $i; ?>"><img src="<?php echo $base_url.$val_array["thumbnail_image"];?>"/></a></li>
            </div>
            <?php 
            if($val_array['fake_timer_days']>0){
              $val_array['start_date'] = date('Y-m-d', strtotime('+ 1 days'));
              $val_array['end_date'] = date('Y-m-d', strtotime('+ '.$val_array['fake_timer_days'].' days'));
            }
            $val_array_new[$i]= $val_array; $i++; } ?>
           <!--  <div class="item">
                <li><a data-toggle="tab" href="#menu1"><img src="assets/images/game13.jpg"/></a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu2"><img src="assets/images/game14.jpg"/></a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu3"><img src="assets/images/game15.jpg"/></a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu4"><img src="assets/images/game16.jpg"/></a></li>
            </div> -->
        </div>
    </ul>
    <div class="tab-content">
    	<?php foreach ($val_array_new as $key => $value): 
    		$active_class = '';
    		$array = [];
    		$hourdiff = '';
    		if($key=='0'){
					                	$active_class = "active";
					     }   
			$hourdiff = round((strtotime($value["end_date"]) - strtotime($value["start_date"]))/3600, 1);
			$array = str_split($hourdiff);
					 ?>
    		
        <div id="home<?php echo $key; ?>" class="tab-pane fade in <?php echo $active_class; ?>">
            <div class="p-tournament__bar">
						<div>
							<dl class="pairs pairs--inline">
								<dt>
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="text-white"><?php echo $lang['start_t'];?></font></font></span>
								</dt>
								<dd id="tournamentstartTimer-325"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $value["start_date"];?></font></font></dd>
							</dl>
							<dl class="pairs pairs--inline end_date">
								<dt>
									<span><?php echo $lang['end_t'];?></span>
								</dt>
								<dd id="tournamentendTimer-325"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $value["end_date"];?></font></font></dd>
							</dl>
						</div>
			</div>
			<div class="game_banner">
				<div class="text_me">
					<h3><?php echo $value["name"];?></h3>
					<div class="countdown" id="countdown">
					
    <!--<div class="bloc-time hours" data-init-value="<?php echo $hourdiff; ?>">
      

      <div class="figure hours hours-1">
        <span class="top"><?php //echo $array[0];?></span>
        <span class="top-back">
          <span><?php echo $array[0];?></span>
        </span>
        <span class="bottom"><?php echo $array[0];?></span>
        <span class="bottom-back">
          <span><?php echo $array[0];?></span>
        </span>
      </div>
	
      <div class="figure hours hours-2">
        <span class="top"><?php echo $array[1];?></span>
        <span class="top-back">
          <span><?php echo $array[1];?></span>
        </span>
        <span class="bottom"><?php echo $array[1];?></span>
        <span class="bottom-back">
          <span><?php echo $array[1];?></span>
        </span>
      </div>
     <!--  <?php if(!empty($array[2])) { ?> 
       <div class="figure hours hours-3">
        <span class="top"><?php echo $array[2];?></span>
        <span class="top-back">
          <span><?php echo $array[2];?></span>
        </span>
        <span class="bottom"><?php echo $array[2];?></span>
        <span class="bottom-back">
          <span><?php echo $array[2];?></span>
        </span>
      </div>-->
  	<!-- <?php  } ?> -->
	  <!--<span class="count-title">Hours</span>
    </div>-->
 	<ul>
      <li><span id="days<?php echo $key; ?>"></span><?php echo $lang['days_t'];?></li>
      <li><span id="hours<?php echo $key; ?>"></span><?php echo $lang['hours_t'];?></li>
      <li><span id="minutes<?php echo $key; ?>"></span><?php echo $lang['min_t'];?></li>
      <li><span id="seconds<?php echo $key; ?>"></span><?php echo $lang['sec_t'];?></li>
    </ul>
   <script type="text/javascript">
   start_timer("<?php echo date("m/d/Y", strtotime($value["start_date"])); ?>","<?php echo $value["end_date"]; ?>","<?php echo $key; ?>");
   </script>
    
  </div>
				</div>
			</div>
        </div>

        	<?php endforeach ?>
       <!--  <div id="menu1" class="tab-pane fade">
            <h3>2</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>3</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3> 4</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu4" class="tab-pane fade">
            <h3>5</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div> -->
    </div>
</div>
</section>
	

	<!-- <div class="s-top-area upcome_tr mt-5">
		<div class="container">
			<div class="main-box affiliate-box">
				<div class="header-area"> <h4>Upcoming Tournaments</h4></div>
					<div class="aff-table">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<th>Name</th>
									<th>Tournament</th>
									<th>Timer</th>
									<th>Total Rewards</th>
								</thead>
								<tbody>
								<?php $i=1; 
					                while ($val_array = mysqli_fetch_array($upcoming_tournament)) {                       
					            ?>
								<tr>
									<td><?php echo $val_array["name"];?> </td>						
									<td><img class="top-img" src="<?php echo $base_url.$val_array["thumbnail_image"];?>" alt="image" width="50" height="50"></td>
									<td data-countdown="2022/06/20"><h6> 47 </h6> <h6> 10 </h6> <h6> 57 </h6> <h6> 17 </h6></td>
									<td><?php echo $val_array["available_rewards"];?></td>
								</tr>
								<?php } ?>
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
		</div>
	</div>  -->

	<div class="s-top-area upcome_tr mt-5">
		<div class="container">
			<div class="main-box affiliate-box">
				<div class="header-area text-white"> <h4><?php echo $lang['live_t'];?></h4></div>
					<div class="aff-table">
						<!-- <div class="table-responsive">
							<table class="table">
								<thead>
									<th>Name</th>
									<th>Tournament</th>
									<th>Total Rewards</th>
									<th>Join now</th>
								</thead>
								<tbody>
									<?php $i=1; 
					                //while ($val_array_new = mysqli_fetch_array($live_tournament)) {                       
					           		 ?>
								<tr>
									<td> <?php echo $val_array_new["name"]; ?> </td>						
									<td><img class="top-img" src="<?php echo $base_url.$val_array_new["thumbnail_image"];?>" alt="image" width="50" height="50"></td>
									<td><?php echo $val_array_new["available_rewards"]; ?></td>									
									<td>
									
										<a href="gametournament.php?id=<?php echo $val_array_new["id"]; ?>"><button class="cmn-btn" tabindex="0">Join now!</button></a>
								</td>
								</tr>
								<?php // } ?>
								
							
							
								</tbody>
							</table>
						</div> -->
							<div class="row">
								 <?php $i=1; 
					                while ($val_array_new = mysqli_fetch_array($live_tournament)) {                       
					                  ?>
									<div class="col-sm-4">
										<div class="single-tikit">
										<a style="text-decoration:none;" href="gametournament.php?id=<?php echo $val_array_new["id"];?>">
											<div class="image">
												<img src="<?php echo $base_url.$val_array_new["thumbnail_image"];?>" alt="">
											</div>
											<div class="content">
												<div class="content-area">
													<h4><?php echo $val_array_new["name"];?></h4>
												</div>
											</div>
										</a>
										</div>
									</div>
								<?php } ?>
							</div>
					</div>
				</div>
		</div>
	</div>
	<!-- Raffles section start -->
	
<!-- 	<div class="inner-banner s-top-area  leader_cup ">
		<div class="container">
		<div class="section-header ">
                            <h2 class="title">Upcoming Tournaments</h2>
		</div>
				<div class="one-time mb-5">
					<div class="bottom-item" >
						<div class="row">
							<div class="col-lg-5">
								<div class="left-item">
									<p class="text-sm">Registration Opened</p>
									<h4>Leader Cup #7</h4>
									<div class="draw-counter d-flex">
										<div class="time-parameter left">
											<h5>26</h5>
											<span>SEP</span>
										</div>
										<div class="head">
											<div class="date-area d-flex justify-content-center" data-countdown="2022/06/20"><h6> 47 </h6> <h6> 10 </h6> <h6> 57 </h6> <h6> 17 </h6></div>
											<div class="time-parameter">
												<span>DAY</span>
												<span>HRS</span>
												<span>MIN</span>
												<span>SEC</span>
											</div>
										</div>
									</div>
									<div class="btn-area">
										<a href="#" class="cmn-btn" tabindex="0">Join now!</a>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="right-area">
									<img class="img-char" src="assets/images/character.png" alt="image">
								</div>
							</div>
						</div>
					</div>
					<div class="bottom-item" >
						<div class="row">
							<div class="col-lg-5">
								<div class="left-item">
									<p class="text-sm">Registration Opened</p>
									<h4>Leader Cup #7</h4>
									<div class="draw-counter d-flex">
										<div class="time-parameter left">
											<h5>26</h5>
											<span>SEP</span>
										</div>
										<div class="head">
											<div class="date-area d-flex justify-content-center" data-countdown="2022/06/20"><h6> 47 </h6> <h6> 10 </h6> <h6> 57 </h6> <h6> 17 </h6></div>
											<div class="time-parameter">
												<span>DAY</span>
												<span>HRS</span>
												<span>MIN</span>
												<span>SEC</span>
											</div>
										</div>
									</div>
									<div class="btn-area">
										<a href="#" class="cmn-btn" tabindex="0">Join now!</a>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="right-area">
									<img class="img-char" src="assets/images/character.png" alt="image">
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<div class="row mb-40">
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
			<div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="assets/images/game-img-1.png" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Mix It Mondays - Carry Only</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="assets/images/waitng-icon.png" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="assets/images/price-coin.png" alt="image">prize</span>
                                    <h4 class="dollar">$739</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="assets/images/game-img-1.png" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Mix It Mondays - Carry Only</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="assets/images/waitng-icon.png" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY/PLAYER</span>
                                        <span class="sub">10 Credits</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Team Size</span>
                                        <span class="sub">2 VS 2</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">64</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">11</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="assets/images/price-coin.png" alt="image">prize</span>
                                    <h4 class="dollar">$739</h4>
                                    <a href="tournaments-single.html" class="cmn-btn">View Tournament</a>
                                    <p>Top 3 Players Win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
	</div> -->


</div>

<?php include "footer.php"; ?>		
<script>

$(' .owl_1').owlCarousel({
    loop:true,
    margin:2,	
	navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	responsiveClass:true,autoplayHoverPause:true,
	autoplay:true,
	 slideSpeed: 400,
      paginationSpeed: 400,
	 autoplayTimeout:3000,
    responsive:{
        0:{
            items:1,
            nav:true,
			  loop:true
        },
        600:{
            items:3,
            nav:true,
			  loop:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})

$(document) .ready(function(){
var li =  $(".owl-item li ");
$(".owl-item li").click(function(){
li.removeClass('active');
});
});
</script>

<script>
//(function () {
 // function start_timer(start_date, end_date, key) {
 //  const second = 1000,
 //        minute = second * 60,
 //        hour = minute * 60,
 //        day = hour * 24;

 //  //I'm adding this section so I don't have to keep updating this pen every year :-)
 //  //remove this if you don't need it
 //  let today = new Date(),
 //      dd = String(today.getDate()).padStart(2, "0"),
 //      mm = String(today.getMonth() + 1).padStart(2, "0"),
 //      yyyy = today.getFullYear(),
 //      nextYear = yyyy + 1,
 //      dayMonth = "09/30/",
 //      birthday = dayMonth + yyyy;
 //  		//birthday = start_date;
 //  today = mm + "/" + dd + "/" + yyyy;
 //  if (today > birthday) {
 //    birthday = dayMonth + nextYear;
 //  }
 //  console.log(birthday);
 //  //end
  
 //  const countDown = new Date(birthday).getTime(),
 //      x = setInterval(function() {    

 //        const now = new Date().getTime(),
 //              distance = countDown - now;

 //        document.getElementById("days"+key).innerText = Math.floor(distance / (day)),
 //          document.getElementById("hours"+key).innerText = Math.floor((distance % (day)) / (hour)),
 //          document.getElementById("minutes"+key).innerText = Math.floor((distance % (hour)) / (minute)),
 //          document.getElementById("seconds"+key).innerText = Math.floor((distance % (minute)) / second);

 //        //do something later when date is reached
 //        if (distance < 0) {
 //          document.getElementById("headline").innerText = "It's my birthday!";
 //          document.getElementById("countdown").style.display = "none";
 //          document.getElementById("content").style.display = "block";
 //          clearInterval(x);
 //        }
 //        //seconds
 //      }, 0)
 //  		}
  //}());
</script>
</body>

</html>