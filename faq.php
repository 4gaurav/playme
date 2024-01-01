<?php
	 //include 'db.php';
	 session_start();
    /*$login_query="select * from tbl_games order by id desc limit 8";
	$data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());

	$login_query="select * from tbl_user_challenges where status=1 order by id desc limit 5";
	$data_gst1 = mysqli_query($con1,$login_query) or die(mysqli_error());

	$login_query="select * from tbl_user_tournament where status=1 order by id desc limit 5";
	$data_gst2 = mysqli_query($con1,$login_query) or die(mysqli_error());*/
 	include "header.php"; 
 ?>

	<section class="challenge_name" style="background-image: url('assets/images/games.png');">
			<div class="container">
				<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<h3>FAQ</h3>
					<ul class="breadcrumb-list">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#" class="active">Faq</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	</div>
	</section>
	<link rel="stylesheet" href="new_css_file/suraj.css">
	<div class="accordion">
	 <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
      <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content1'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>

        <div class="hidden-box">
          <p>
            <?php echo $lang['content2'];?>
          </p>
          
        </div>
      </div>
	  </div>
	 <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content3'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content4'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content5'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content6'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content7'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content8'];?>
          </p>
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content9'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content10'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content11'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content12'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content13'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content14'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content15'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content16'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content17'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content18'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content19'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content20'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content21'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content22'];?>
          </p>
          
        </div>
      </div>
	  </div>
	  <div class="block-FAQ__tab" style="border-top: 1px solid #d5d9d9;">
	  <div class="item" style="display: grid;">
        <p class="number"></p>
        <h4><?php echo $lang['content23'];?></h4>
        <div class="iconOpen">
          <ion-icon class="icon" name="add-outline"></ion-icon>
        </div>
        <div class="iconClose">
          <ion-icon class="icon" name="close-outline"></ion-icon>
        </div>
        <div class="hidden-box">
          <p>
            <?php echo $lang['content24'];?>
          </p>
          
        </div>
      </div>
	  </div>

	  
	 </div>
	
	<?php include "footer.php" ?>

