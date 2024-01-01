<?php
require '/var/www/html/game24/PHPMailer/PHPMailerAutoload.php';
  if(isset($_POST['contact_us'])) {
        $msg = $_POST['msg'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
		$html_content = "
	      <html>
	      <head>
	      <title>Contact Us</title>
	      </head>
	      <body>
	      <p>New Enquiry Contact Us:</p>
	      <table>
	      <thead>
	      <tr>
	      <th>Name</th>
	      <th>Email</th>
	      <th>Number</th>
	      <th> Message</th>
	      </tr>
	      </thead>
	      <tbody>
	      <tr>
	      <td>$name</td>
	      <td>$email</td>
	      <td>$number</td>
	       <td>$msg </td>
	      </tr>
	      </tbody>
	      </table>
	      </body>
	      </html>
	      ";
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
                      $mail->addAddress('hello@games24.in', 'Game24');
                      //$mail->addCC('reeju@chat2friend.co.in', 'Reeju Jain');
                      $mail->Subject = 'Contact Us: GAMES 24';
                      $mail->msgHTML($html_content, dirname(__FILE__));
                      if (!$mail->send()) {
                      $mailmsg="Mailer Error: " . $mail->ErrorInfo; echo $mailmsg; die;
                      } else {
                      $mailmsg= "Message sent!";
                      $message='We have receive your response. We will contact you shortly!';
                      // unlink($htmlfilename);
                      }
                  }
                  include "header.php"; 
?>

	<section class="breadcrumb-area contact">
	</section>
	<!-- Breadcrumb Area End -->

	<!-- Contact Area Start -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="contact-area">
						<div class="row">
							<div class="col-lg-12">
								<h2><?php echo $lang['get_touch'];?></h2>
							</div>
						</div>
						<div class="row justify-content-between align-items-center">
							<div class="col-lg-6">
								<div class="left-area">
									<form action="" method="post">
										<div class="form-group">
											<label for="#"><?php echo $lang['your_name'];?></label>
											<input type="text" name="name" required="" placeholder="<?php echo $lang['your_name'];?>">
										</div>
										<div class="form-group">
											<label for="#"><?php echo $lang['your_number'];?></label>
											<input type="text" name="number" required="" placeholder="<?php echo $lang['enter_your_number'];?>">
										</div>
										<div class="form-group">
											<label for="#"><?php echo $lang['your_email'];?> </label>
											<input type="email" name="email" required="" placeholder="<?php echo $lang['enter_your_email'];?>">
										</div>
										<div class="form-group">
											<label for="#"><?php echo $lang['your_message'];?></label>
											<textarea class="" name="msg" placeholder="<?php echo $lang['enter_your_message'];?>" ></textarea>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
												<label class="custom-control-label" for="customCheck1"><?php echo $lang['your_terms'];?></label>
											  </div>
										</div>
										<button type="submit" class="mybtn2" name="contact_us" value="contact_us"><?php echo $lang['your_submit'];?></button>
									</form>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="right-area">
									<div class="top-content">
										<!-- <h4>Have questions?</h4> -->
										<p>
											<?php echo $lang['contact_questions'];?>
										</p>
										<a href="#">
											<?php echo $lang['your_faq'];?> <i class="fas fa-chevron-right"></i>
										</a>
									</div>
									<div class="bottom-content">
										<div class="single-info">
											<div class="icon">
												<i class="far fa-envelope"></i>
											</div>
											<div class="content">
												<h4><?php echo $lang['your_address'];?></h4>
												<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e9eee6efc0f3eff2ebefaee3efed">hello@games24.in</a></p>
											</div>
										</div>
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
										<div class="single-info">
											<div class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</div>
											<div class="content">
												<h4><?php echo $lang['your_address_2'];?></h4>
												<p>455 Patparganj Industrial Area, Delhi 110092, India</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Area End -->



<?php include "footer.php"; ?>	