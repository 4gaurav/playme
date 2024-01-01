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
 $challenge_id = $_GET['id'];
 $login_query="select * from tbl_challenges where id='$challenge_id' order by id desc"; 

 $data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());
 $val_array = mysqli_fetch_array($data_gst);

	 if(!empty($_POST['submit_entry'])) {
			 //$challenge_id = $_POST['challenge_id'];
			 $user_id = $_SESSION['user_id'];
        	 $name = $_SESSION['name'];
        	 $email = $_SESSION['email'];
        	 $challenge_name = $val_array['name'];
        	 $available_rewards = $val_array['available_rewards'];
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
         $query = "SELECT * FROM  tbl_user_challenges WHERE challenge_id = '".$challenge_id."' and user_id = '".$user_id."' and status=1"; 
        $result = mysqli_query($con1,$query);
        $numrows = mysqli_num_rows($result);
            if ($numrows == 0){
	    $login_query="insert into  tbl_user_challenges (name,user_id,challenge_id,created_at,challenge_name,reward_points) values ('$name','$user_id','$challenge_id',now(),'$challenge_name','$available_rewards')";
		$login_query = mysqli_query($con1,$login_query) or die(mysqli_error($con1));
		$message = 'New Challenge Entry Submitted Successfully. Please upload Challenge video';

		        require '/var/www/html/game24/PHPMailer/PHPMailerAutoload.php';
                	$htmlfilename='/var/www/html/game24/submitentry_emailtemplate.php';
                	$html_content = file_get_contents($htmlfilename);
                	$html_content = str_replace('challenge_name', $challenge_name, $html_content);
                	$html_content = str_replace('user_name', $name, $html_content);
                   	 //$reportdate=date("YmdHis");
                      // $htmlfilename='email_template/emailcontentAlert_'.$reportdate.'.html';
                      // $file = fopen($htmlfilename,"w");
                      // fwrite($file,$content);
                      // fclose($file);
                        $mail = new PHPMailer();
                        $mail->IsSMTP(); // enable SMTP
                     //   $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                        $mail->SMTPAuth = true; // authentication enabled
                        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
                        $mail->Host = "us2.smtp.mailhostbox.com";
                        $mail->Port = 587; // or 587
                        $mail->IsHTML(true);
                        $mail->Username = 'hello@games24.in';
                        $mail->Password = 'aJxdroY1';
                      $mail->Encoding='base64';
                      $mail->setFrom('hello@games24.in', 'Game24');
                     // $mail->addAddress('nakuljain67@gmail.com', 'Nakul Jain');
                      $mail->addAddress($email, 'Game24');
                      //$mail->addCC('reeju@chat2friend.co.in', 'Reeju Jain');
                      $mail->Subject = 'Entry Submitted: GAMES 24';
                      $mail->msgHTML($html_content, dirname(__FILE__));
                      if (!$mail->send()) {
                      $mailmsg="Mailer Error: " . $mail->ErrorInfo; echo $mailmsg; die;
                      } else {
                      $mailmsg= "Message sent!";
                      // unlink($htmlfilename);
                      }

		Header("Location:profile.php?message=$message");exit;
							 } else {
	    $message = 'This challenge request already exist..';
							 }
			} else {
		$message = 'Please login first for submitting your challenge';		
			}
	}
include "header.php"; 
?>

	<section class="challenge_name" style="background-image: url('<?php echo $base_url.$val_array["banner_image"];?>');">
	<div class="container">
		<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<h2><?php echo $lang['menu2'];?></h2>
					<ul class="breadcrumb-list">
						<li>
							<a href="#"><?php echo $lang['menu1'];?></a>
						</li>
						<li>
							<a href="#" class="active"><?php echo $lang['menu2'];?></a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>	
	</div>
	</section>
	
	<section class="challenge_dashboard pb-40 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<aside>
						<div class="about">
							<h4><?php echo $lang['upload'];?></h4>
							<a href="#" class="mybtn2 redbg"> Admin</a>
							<a href="#" class="mybtn2  yellowbg"><?php echo $lang['premium'];?></a>
							<a href="#" class="mybtn2 greenbg"><?php echo $lang['verified'];?></a>
							<div class="message-userExtras">
				
							
								<dl class="pairs pairs--justified">
									<dt><i class="fas fa-user" aria-hidden="true"></i></dt>
									<dd><?php echo date('Y-m-d',strtotime($val_array['created_at']));?></dd>
								</dl>
							
								<dl class="pairs pairs--justified">
									<dt><i class="fas fa-thumbs-up" aria-hidden="true"></i></dt>
									<dd>344</dd>
								</dl>
							
							
								<dl class="pairs pairs--justified">
									<dt><i class="fas fa-trophy" aria-hidden="true"></i></dt>
									<dd>107</dd>
								</dl>
							
							
							
								<dl class="pairs pairs--justified">
									<dt><i class="fas fa-map-marker" aria-hidden="true"></i></dt>
									<dd>
										
											<a href="/misc/location-info?location=Earth" rel="nofollow noreferrer" target="_blank" class="u-concealed">Earth</a>
										
									</dd>
								</dl>
								<dl class="pairs pairs--justified">
								<dt title="Credits"><i class="fas fa-wallet" aria-hidden="true"></i></dt>
								<dd>
									1,770
								</dd>
								</dl>

					
				</div>
						</div>
					
					</aside>
				</div>
				<div class="col-sm-9 order-first order-lg-2">
					<div class="main-box">

						<div class="row">
							<div class="col-sm-5">
								<div class="header-area">
										<h4><?php echo $lang['challenge_heading'];?> - <?php echo $val_array['name'];?> </h4>
								</div>
								<div class="message-content-field-tasks">
											<p><?php echo $lang['task_heading'];?></p>
											<div class="bbWrapper">
												<!-- <ul>
													<li ><b>English: </b>Use fireworks</li>
													<li><b>Portuguese: </b>Usar fogos de artifício</li>
													<li><b>Italian: </b>Usa i fuochi d'artificio</li>
													<li><b>Danish: </b>Brug fyrværkeri</li>
													<li><b>Dutch: </b>Gebruik vuurwerk</li>
													<li><b>French: </b>Utiliser des feux d'artifice</li>
													<li><b>Arabic: </b>استخدم الألعاب النارية</li>
													<li><b>Svenska: </b>Använd fyrverkerier</li>
													<li><b>Norsk: </b>Bruk fyrverkeri</li>
													<li><b>Suomalainen: </b>Käytä ilotulitteita</li>
													<li><b><b>Español</b>: </b>Usa fuegos artificiales</li>
													<li><b><b>Ελληνικά</b>: </b>Χρησιμοποιήστε πυροτεχνήματα</li>
												</ul> -->
												<?php if($_SESSION['lang']=='en') { ?>
								<h4><?php echo $val_array["task_list"];?></h4>
							<?php } else if($_SESSION['lang']=='sw') {?>
							    <h4><?php echo $val_array["task_list_sw"];?></h4>
							<?php } else if($_SESSION['lang']=='pg') {?>
							    <h4><?php echo $val_array["task_list_pg"];?></h4>
							<?php }else if($_SESSION['lang']=='ar') {?>
							    <h4><?php echo $val_array["task_list_ar"];?></h4>
							<?php }else if($_SESSION['lang']=='mx') {?>
							    <h4><?php echo $val_array["task_list_mx"];?></h4>
							<?php }else if($_SESSION['lang']=='fr') {?>
							    <h4><?php echo $val_array["task_list_fr"];?></h4>
							<?php } else {?>
							    <h4><?php echo $val_array["name"];?></h4>
							<?php } ?>
											</div>
										</div>
							</div>
							<div class="col-sm-7 text-center">
								<img src="<?php echo $base_url.$val_array["thumbnail_image"];?>">
							</div>
							<div class="col-sm-12">
								<form method="post" action="" enctype="multipart/form-data">
									<!-- <input type="hidden" name="challenge_id" value="<?php echo $challenge_id; ?>"> -->
									<!-- <div class="form-group col-md-6">
		                                <label for="exampleFormControlFile1">Upload Video</label>
		                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="video">
                       				</div> -->
										<button type="submit" class="mybtn1 newbtn"  name="submit_entry" value="submit_entry"> <?php echo $lang['entry_submit'];?> </button>
								</form>
							</div>
								<div class="rank-area col-sm-12">
							<div class="message-content-field-rewards">
									<h5><?php echo $lang['winner_rewards'];?></h5>
									<div class="bbWrapper">
										<ul>
											<li><b><?php echo $val_array['available_rewards'];?> </b>credits</li>
										</ul>

									</div>
								</div>
						</div>
						</div>
			
					</div>
								
						<div class="row justify-content-center mt-4">
						<div class="col-lg-12">
						<h3 class="mt-3 mb-3"><?php echo $lang['instructions'];?></h3>
						</div>
						
							<div class="col-lg-2 col-md-6">
								<div class="s-h-play">
									<div class="outer">
									<img src="assets/images/submit.png" alt="">
									</div>
									<h4><?php echo $lang['tournament_submit'];?></h4>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="s-h-play">
									<div class="outer">
									<img src="assets/images/completed-task.png" alt="">
									</div>
									<h4><?php echo $lang['compete_touranment'];?></h4>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="s-h-play">
									<div class="outer">
									<img src="assets/images/play.png" alt="">
									</div>
									<h4><?php echo $lang['make_video'];?></h4>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="s-h-play">
									<div class="outer">
									<img src="assets/images/upload.png" alt="">
									</div>
									<h4><?php echo $lang['upload_video'];?></h4>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="s-h-play">
									<div class="outer">
									<img src="assets/images/h-play/ic3.png" alt="">
									</div>
									<h4><?php echo $lang['win_reward'];?></h4>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
<?php include "footer.php"; ?>	