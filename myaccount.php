<?php
session_start();
error_reporting(0);
require_once("db.php");
$logPath = "log/pormeo/myaccount_".date("Ymd").".txt";
error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
error_log("act:".date('Ymd His').": ". $_SESSION['act']."\n", 3, $logPath);	
error_log("msisdn:".date('Ymd His').": ". $_SESSION['msisdn']."\n", 3, $logPath);	
$subscriptionId =$_GET['subscriptionId'];

if($subscriptionId!='')
{
	error_log(date('Ymd His').": we hae subscription id it is for direct deactivate\n", 3, $logPath);
	$_SESSION['act'] ="11";
}else{

$msisdn =$_SESSION['msisdn'];
error_log(date('Ymd His').": value of msisdn in first step = $msisdn\n", 3, $logPath);
if($msisdn=="")
{	
	$msisdn =$_GET['msisdn'];
error_log(date('Ymd His').": value of msisdn into  first if=$msisdn \n", 3, $logPath);	
}

if($msisdn=="")
{	
	error_log(date('Ymd His').": value of msisdn not present redirected to msisdn entrence page=$msisdn\n", 3, $logPath);
	header("Location:entermsisdn.php");	
	die;	
}
$msisdn = substr($msisdn, -9);
$msisdn='351'.$msisdn;
$_SESSION['msisdn']=$msisdn;
error_log(date('Ymd His').": value of final msisdn $msisdn \n", 3, $logPath);
	
$qry = "select * from tbl_subscription_pormeo where msisdn = '$msisdn'";
error_log(date('Ymd His').": qry $qry \n", 3, $logPath);
  $result = mysqli_query($con1,$qry);
  if (!$result) {
    echo mysqli_error();
  }
  $isSubscribed = mysqli_num_rows($result);  
  if($isSubscribed > 0) {
    $_SESSION['act'] ="1";
    $_SESSION['msisdn']=$msisdn;
  } else {
     $_SESSION['msisdn'] = $msisdn;
	 $_SESSION['act'] ="0";
  }
   
   if( $_SESSION['lang']=='')
   {
	   $_SESSION['lang']='pg';
}
   
   
   error_log(date('Ymd His').": value of final msisdn $msisdn \n", 3, $logPath);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Play me</title>
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
<header class="header">
		<div class="overlay"></div>
				<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">                 
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="http://www.esports.playme.in.net/index.php?lang=ar">
								<img src="assets/images/logo.png" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
									
									<li class="nav-item">
										<a class="nav-link" href="http://www.esports.playme.in.net/">Inicio</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="myaccount.php">Minha conta</a>
									</li>
									
								</ul>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
</header>
	<!-- Header Area End  -->
	<script type="text/javascript">
		function change_url() {
			 var lang = $('#record option:selected').val();
			 window.location.href = 'index.php?lang='+lang;
		}
</script>

<section class="breadcrumb-area contact">
	</section>
	
		<section class="contact-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="contact-area">
						<div class="row">
							<div class="col-lg-12">
							<?php

if($_SESSION['act']=='1')
						{
	$Query = "select  * from tbl_subscription_pormeo where msisdn = '$msisdn'";
    error_log(date('Ymd His')." : called Query  $Query \n", 3, $logPath);
		$result=mysqli_query($con1,$Query);
		while($mis_array=mysqli_fetch_assoc($result)) {			
			$regdate = $mis_array['regdate'];
			$subscriptionId = $mis_array['subscriptionId'];
			$_SESSION['subscriptionId']=$subscriptionId;			
		}
        

$idd="00".date("ymdHisu");
		 $action2 ="unsub_pormeo.php?subscriptionId=$subscriptionId";



error_log(date('Ymd His').": value of in center $msisdn \n", 3, $logPath);
		 ?>
        
        
<h5>Utilizador de boas-vindas</h5>
<p> Você é o nosso membro principal</p>

<h5>Inscrição</h5>
<p>Data de início :<?php echo $regdate;   ?></p>
<p>Estado: Ativo</p>
<p>Clique aqui para ver o conteúdo<b><u><a href="http://www.esports.playme.in.net/index.php?lang=por&status=true">aqui</a></u></b></p>
<p>Clique aqui para cancelar a inscrição<b><u><a href="unsub_pormeo.php?subscriptionId=<?php echo $subscriptionId; ?>">aqui</a></u></b></p>
<div class="left-area">
</div>
<?php } else if($_SESSION['act']=='11')
{
	?>
	<h5>Utilizador de boas-vindas</h5>
<p> Você é o nosso membro principal</p>

<h5>Inscrição</h5>
<p>Clique aqui para ver o conteúdo<b><u><a href="https://www.esports.games24.in/index.php?lang=por&status=true">aqui</a></u></b></p>
<p>Clique aqui para cancelar a inscrição<b><u><a href="unsub_pormeo.php?subscriptionId=<?php echo $subscriptionId; ?>">aqui</a></u></b></p>
<div class="left-area">
</div>
<?php
}  
else	{
	
	$action1="http://www.esports.playme.in.net/promo.php?sid=pormeo&subid=testing&req=he&id=419";
	
	error_log(date('Ymd His').": value at bottom msisdn $msisdn \n", 3, $logPath);
	?>
	<h5>Utilizador de boas-vindas</h5>
<p>Você não é um user inscrito no nosso serviço. Por favor. clique no botão abaixo para se inscrever.</p>
<div class="left-area">
<center>
<button class="button button3" onclick="location.href='<?php echo $action1;?>'">Inscreva-se agora</button> 
</center>
</div>
<?php } ?>

								
							</div>
						</div>
						<div class="row justify-content-between align-items-center">
							
							<div class="col-lg-5">
								<div class="right-area">
									<div class="top-content">
										<!-- <h4>Have questions?</h4> -->
										
										
									</div>
									<div class="bottom-content">
										
										<!--<div class="single-info">
											<div class="icon">
												<i class="fas fa-phone"></i>
											</div>
											<div class="content">
												<h4>Email Us</h4>
												<p>+1 (987) 664-32-11</p>
												<p>+1 (987) 694-32-11</p>
											</div>
										</div> -->
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include "footer.php"; ?>






