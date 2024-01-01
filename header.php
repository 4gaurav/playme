<?php 
  error_reporting(0);
  session_start();
  $reward_id = $_SESSION['reward_id'];
  $product_count = 0;
  if($_GET['co']=='qa')
  {
  $_SESSION['country']=$_GET['co'];
  }
  if($_GET['con']=='kenya')
  {
  $_SESSION['country']=$_GET['con'];
  }
  if(!empty($reward_id)) {
  $product_count = count(explode(',',$reward_id));
    }
  $available_langs = array('en','fr','ar','po','ge','pg','sw','mx');
  if(empty($_SESSION['lang'])){
   $_SESSION['lang'] = 'en';
  }

  if(isset($_GET['lang']) && $_GET['lang'] != ''){ 
    if(in_array($_GET['lang'], $available_langs))
    {       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
  }
  include('languages/lang.'.$_SESSION['lang'].'.php');

 include 'db.php';
if(!empty($_POST['register'])) 
{
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = '2';
  if($_POST['password']==$_POST['confirm_password']) {
  $query = "SELECT * FROM  tbl_users WHERE email = '".$email."'"; 
        $result = mysqli_query($con1,$query);
        $numrows = mysqli_num_rows($result);
        if ($numrows == 1){
            $message_error='This Email Id is already Registered';
        }
        else if($numrows == 0) {
                $insert_bulk_userdata="INSERT INTO tbl_users (name,number,email,role,password,created_on) values('$name','$number','$email','$role','$password',now())";
                if(mysqli_query($con1,$insert_bulk_userdata))
                {
                $loginid = mysqli_insert_id($con1);
                $message='Registration Successfully. Please login to continue.'; 
                     //    $htmlfilename='/home/poweroffactorial/public_html/registration_emailtemplate.html';
                     //    $mail = new PHPMailer();
                     //    $mail->IsSMTP(); // enable SMTP
                     //    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                     //    $mail->SMTPAuth = true; // authentication enabled
                     //    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                     //    $mail->Host = $mail_host;
                     //    $mail->Port = 465; // or 587
                     //    $mail->IsHTML(true);
                     //    $mail->Username = $mail_user_name;
                     //    $mail->Password = $mail_password;
                     //  $mail->Encoding='base64';
                     //  $mail->setFrom($mail_user_name, 'Power of Factorial');
                     //  $mail->addAddress($email, $name);
                     //  $mail->Subject = 'Welcome to Power of Factorial';
                     //  $mail->msgHTML(file_get_contents($htmlfilename), dirname(__FILE__));
                     //  if (!$mail->send()) {
                     //  $mailmsg="Mailer Error: " . $mail->ErrorInfo; 
                     //  //echo $mailmsg;die;
                     //  } else {
                     //  $mailmsg= "Message sent!";
                     // // unlink($htmlfilename);
                     //  }
                 require '/var/www/html/game24/PHPMailer/PHPMailerAutoload.php';
                	$htmlfilename='/var/www/html/game24/registration_emailtemplate.php';
                    $reportdate=date("YmdHis");
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
                      $mail->Subject = 'WELCOME TO GAMES 24';
                      $mail->msgHTML(file_get_contents($htmlfilename), dirname(__FILE__));
                      if (!$mail->send()) {
                      $message_error="Mailer Error: " . $mail->ErrorInfo; 
                      // echo $mailmsg; die;
                      } else {
                      $mailmsg= "Message sent!";
                      // unlink($htmlfilename);
                      }
                }
                else
                {
                    $message_error='Error in User Registration.';
                }
            }
          } else {
             $message_error='Password and Confirm Password is not Same';
          }
}

if(!empty($_POST['commit'])) 
{
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $login_query="select * from tbl_users where email = '".$email."' AND password= '".$pass."'";
    //echo $login_query;
    $login_query = mysqli_query($con1,$login_query);
    $row = mysqli_fetch_assoc($login_query);
    if(($email == $row['email']) && ($pass == $row['password']))
    {      
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['authid'] = true;
        $_SESSION["number"] =$row['number'];
        $_SESSION["role"] =$row['role'];   
        $_SESSION["reward_points"] =$row['reward_points'];      
        // header("Location: dashboard.php");
        // exit;
        $message='Your account logged in successfully'; 
    }
    else
    {
     $message = 'Invalid Login details. Please Enter valid Email or Password';
    } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $lang['label'];?></title>
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="assets/css/plugin.css">

	<!-- stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="new_css_file/suraj.css" />
	
	
	<style>
	select {
	background-color: transparent!important;
    color: #fff!important;
	}
	label {
	color:#fa009f
	}
	.single-turnaments {
	margin-top:100px
	}
	</style>
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- Header Area Start  -->
	<header class="header">
		<div class="overlay"></div>
		<!-- Top Header Area Start -->
		<section class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="left-content">
								<ul class="left-list">
									<li>
										<p>
											<i class="fas fa-headset"></i>	Support
										</p>
									</li>
								</ul>
								<ul class="top-social-links">
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
							<div class="right-content">
								<ul class="right-list">
									<li>
										<div class="language-selector">
											<select name="language" class="language" onchange="change_url()" id="record">
												<option value="en" <?php echo $_SESSION['lang']=='en'?'selected':''; ?>>EN</option>
												<option value="ar" <?php echo $_SESSION['lang']=='ar'?'selected':''; ?>>AR</option>
												<option value="po" <?php echo $_SESSION['lang']=='po'?'selected':''; ?>>PO</option>
												<option value="ge" <?php echo $_SESSION['lang']=='ge'?'selected':''; ?>>GE</option>
												<option value="pg" <?php echo $_SESSION['lang']=='pg'?'selected':''; ?>>PORT</option>
												<option value="sw" <?php echo $_SESSION['lang']=='sw'?'selected':''; ?>>SWD</option>
												<option value="mx" <?php echo $_SESSION['lang']=='mx'?'selected':''; ?>>MX</option>
												<option value="fr" <?php echo $_SESSION['lang']=='fr'?'selected':''; ?>>FR</option>
											<!-- 	<option value="3">BN</option> -->
											</select>
										</div>
									</li>
									<!-- <li>
										<div class="notofication"  data-toggle="modal" data-target="#usernotification">
											<i class="far fa-bell"></i>
										</div>
									</li>
									<li>
										<div class="message"  data-toggle="modal" data-target="#usermessage">
											<i class="far fa-envelope"></i>
										</div>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Top Header Area End -->
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">                 
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.php">
								<img src="assets/images/logo.png" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
									<?php if($_SESSION['country']=='qa'||$_SESSION['country']=='kenya'){?>
							<?php } else {?>
									<li class="nav-item">
										<a class="nav-link" href="index.php"><?php echo $lang['menu1'];?></a>
									</li>
									<?php }?>
									<li class="nav-item">
										<a class="nav-link" href="challenge.php"><?php echo $lang['menu2'];?></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tournaments.php"><?php echo $lang['menu3'];?></a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="leaderboard.php"><?php echo $lang['menu8'];?></a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="contact.php"><?php echo $lang['menu5'];?></a>
									</li>
									<?php if($_SESSION['country']=='qa'){?>
									<li class="nav-item">
											<a class="nav-link" href="myaccountqavoda.php"><?php echo $lang['menu51'];?></a>
									</li>
							        <?php } if($_SESSION['country']=='kenya'){?>
									<!--<li class="nav-item">
											<a class="nav-link" href="myaccountenscke.php"><?php //echo $lang['menu51'];?></a>
									</li>-->
							        <?php } else {?>
									<li class="nav-item">
											<a class="nav-link" href="myaccount.php"><?php echo $lang['menu51'];?></a>
									</li>
                                    <?php }?>
									<?php if(!empty($_SESSION['user_id'])) { ?>
									
									<li class="nav-item">
										<a class="nav-link" href="reward.php">Rewards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><span class="badge"><?php echo $product_count; ?></span></a>
									</li>
									
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-user"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="profile.php"><?php echo $lang['menu4'];?></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="logout.php"><?php echo $lang['menu7'];?></a>
											</li>
										</ul>
									</li>
									<?php } ?>
								</ul>
								<?php if($_SESSION['country']=='qa'||$_SESSION['country']=='kenya'){?>
							<?php } else {?>
								<?php if(empty($_SESSION['user_id'])) { ?>
								<a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> <?php echo $lang['menu6'];?></a>
									<?php } ?>
								<?php }?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
		 					<?php if(!empty($message)) { ?>
                                <div class="greenbg"><?php echo $message;?></div>
                                <?php } ?>
                                 <?php if(!empty($message_error)) { ?>
                                <div class="greenbg"><?php echo $message_error;?></div>
                                <?php } ?>
	</header>
	<!-- Header Area End  -->
	<script type="text/javascript">
		function change_url() {
			 var lang = $('#record option:selected').val();
			 window.location.href = 'index.php?lang='+lang;
		}
	</script>