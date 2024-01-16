<?php

session_start();

 ?>
<!DOCTYPE html>
<html lang="zxx">



<head>
	<title>Income Online BD</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stereo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--bootstrap-css-->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--font-awesome-css-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!--flexslider-css-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--style-sheet-->
	<!--fonts-->
	<link href="http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,800,900" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<!--banner start here-->
	<div class="banner" id="home">
		<div class="w3-agile-dot">
			<div class="header">
				<div class="header-main">
					<div class="container">
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a href="index.html"><img src="images/logo.png" width="100px" alt=""></a>
								</h1>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="index.html" class="active scroll">Home</a>
									</li>

									<li>
										<a href="#about" class="scroll">About</a>
									</li>

                  <li>
                    <?php
                     if(isset($_SESSION['user'])){
ini_set('max_execution_time', 0);
                    echo '<a href="my_profile.php" >Profile</a>';

                     }
                     ?>

                  </li>
									<li>
										<a href="#contact" class="scroll">Contact</a>
									</li>
                  <li>
										<a href="notice.php">Notice board</a>
									</li>

                  <li>
                    <?php
                     if(isset($_SESSION['user'])){

                    echo '<a href="account.php" >Account</a>';

                     }
                     ?>

                  </li>
									<li>
										<?php
                     if(isset($_SESSION['user'])){

										echo '<a href="logout.php" >Log Out</a>';

										 }
										 ?>

									</li>
                  <li>
                    <?php
                     if(!isset($_SESSION['user'])){

                    echo '<a href="login.php" >Log In</a>';

                     }
                     ?>

                  </li>
								</ul>

							</div>

							<div class="w3-agile-sectn_search">
								<div class="cd-main-header">
									<ul class="cd-header-buttons">
										<li>

                      <?php

                           if(isset($_SESSION['user'])){
                             $u_id=$_SESSION['user'];
                             include_once "connection.php";
                             $sql = "SELECT count(n_id) as notification,sum(notice) as notice,sum(payment) as payment FROM notification where u_id='$u_id'";
                              $result = mysqli_query($conn, $sql);
                              $notification=0;
                              $notice="none";
                                $payment="none";
                              if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                    $notification=$row['notification'];
                                    $notice=$row['notice'];
                                      $payment=$row['payment'];

                                  }
                              } else {
                                $notification=0;
                                $notice=0;
                                  $payment=0;
                              }

                    echo '<a class="cd-search-trigger" href="#cd-search">
                        <span><i style="color:white;width:100%;height:100%;font-size:x-large" class="fa fa-bell" aria-hidden="true">'.$notification.'</i>  </span>
                    </a>';
                    }

                       ?>

										</li>
									</ul>
									<!-- cd-header-buttons -->
								</div>
								<div id="cd-search" class="cd-search">

									<a href="account.php"><input type="submit" value=" payment notification:<?php echo $payment; ?> "></a>
                  <a href="notice.php"><input type="submit" value=" New notice notification:<?php echo $notice; ?> "></a>

								</div>
							</div>


							<div class="clearfix"> </div>
						</nav>
					</div>
				</div>
				<div class="container">
					<div class="banner-bottom">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<div class="banner-bottom-text">
											<h3>We are the best in this field</h3>

										</div>
									</li>
									<li>
										<div class="banner-bottom-text">
											<h3>We can dance forever</h3>
										</div>
									</li>
									<li>
										<div class="banner-bottom-text">
											<h3>We know how to have fun</h3>

										</div>
									</li>
									<li>
										<div class="banner-bottom-text">
											<h3>Press play and go</h3>
										</div>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</section>
						<div class="thim-click-to-bottom">
							<a href="#about" class="scroll">
								<i class="fa fa-chevron-down" aria-hidden="true"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner end here-->
  <?php
ini_set('max_execution_time', 0);
  if(isset($_SESSION['user'])){
    $id=$_SESSION['user'];
    include_once "connection.php";
    $sql = "SELECT ref_num,name,status FROM user where u_id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $name=$row['name'];
      $status=$row['status'];
      $ref_num=$row['ref_num'];
      $_SESSION['ref_num']=$ref_num;
    }
    }


    $sql = "SELECT amount  FROM reg_amount";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $ref_amount=$row['amount'];
    }
    }

    $sql = "SELECT amount  FROM payment";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $view_amount=$row['amount'];
    }
    }
  }



   ?>
	<!-- about -->
	<div class="about" id="about">
		<div class="banner_bottom_w3-agile_grids">
			<div class="container">
				<!---728x90--->

				<h3 style="margin-bottom: 0;" class="w3layouts-heading">Steps to earn
					<?php
					 if(isset($_SESSION['user'])){

          echo '<span>Money <span><a class="btn btn-danger" href="logout.php" >Log out</a> &nbsp;';
            echo '<a class="btn btn-primary" href="my_profile.php" >My profile</a></h3>';
            if($status!="pending"){
              echo '<p style="font-size:22px;font-weight:bold"> Welcome <span style="color:red;">'.$name.'</span>. Your current status is Active. </p> &nbsp;';

              echo '<p style="font-size:20px;font-weight:bold">**Refernece ID: <span style="color:green;font-wight:bold">'.$ref_num.'. </span> Invite your friends to join here with your reference ID and <span style="color:red;font-weight:bold"> win '.$ref_amount.' Taka</span> for today. </p> &nbsp;';
              echo '<p style="font-size:20px;font-weight:bold">**Watch video today and win <span style="color:red;font-wight:bold">'.$view_amount.' Taka</span> for each video. </p> &nbsp;';

            }else{
              echo '<p style="font-size:25px;font-weight:bold"> Welcome <span style="color:red;">'.$name.'</span>. Your current status is pending. Please wait 24 hours till then you are not getting reference ID and not allowed to view videos. Admin will check your request and approve soon. So, stay with us.</p> &nbsp;';

            }

				}else{
					echo '<span>Money <span><a type="button" class="btn btn-primary btn-lg" href="registration.php" style="height:50px">Registration now</a></span></span>
					 <span><a type="button" class="btn btn-danger btn-lg" href="login.php" style="height:50px">Log In</a></span>';
				}
					 ?>

				</h3>
				<!---728x90--->

				<div style="margin-top:10px" class="banner_bottom_right_grids">
					<div class="col-md-3 col-sm-3 col-xs-3 banner_bottom_right_grid">
						<div class="view view-tenth ab1">
							<div class="w3-agile_text_box">
								<span class="fa fa-users" aria-hidden="true"></span>
								<h3>Registration</h3>
								<p class="paragraph-w3l">Log in,if you are registered.</p>
							</div>
							<div class="mask">
								<img src="images/a1.jpg" class="img-responsive" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3 banner_bottom_right_grid">
						<div class="view view-tenth ab2">
							<div class="w3-agile_text_box">
								<span class="fa fa-eye" aria-hidden="true"></span>
								<h3>Watch videos.</h3>
								<p class="paragraph-w3l">After Log in.watch the videos</p>
							</div>
							<div class="mask">
								<img src="images/a2.jpg" class="img-responsive" alt="">
							</div>
						</div>
					</div>
          <div class="col-md-3 col-sm-3 col-xs-3 banner_bottom_right_grid">
            <div class="view view-tenth ab2">
              <div class="w3-agile_text_box">
                <span class="fa fa-users  " aria-hidden="true"></span>
                <h3>Invite friends.</h3>
                <p class="paragraph-w3l">Invite friends with your reference ID.</p>
              </div>
              <div class="mask">
                <img src="images/a4.png" class="img-responsive" alt="">
              </div>
            </div>
          </div>

					<div class="col-md-3  col-sm-3 col-xs-3 banner_bottom_right_grid">
						<div class="view view-tenth ab3">
							<div class="w3-agile_text_box">
								<span class="fa fa-money" aria-hidden="true"></span>
								<h3>Earn money</h3>
								<p class="paragraph-w3l">earn money and check profile.</p>
							</div>
							<div class="mask">
								<img src="images/a3.jpg" class="img-responsive" alt="">
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<!---728x90--->

			</div>

		</div>
		<!-- about-bottom-->
		<div class="services-inner-agileits-w3layouts">
			<div class="container">

				<div class="col-md-12">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <?php
              include_once "connection.php";
              $sql = "SELECT * FROM gallery where g_id=1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      $first=$row['image_name'];
                  }
                }

                if(isset($first)){
                    echo '<img class="img-responsive" style="    max-height: 120px; width: 100%;" src="admin/pages/layout/gallery/'.$first.' " alt="Chania">';
                }

               ?>
            </div>


          </div>
					<ul id="flexiselDemo1">
						<li>
							<div class="laptop">
								<div class="img-box">
									<img class="img-responsive zoom-img" src="images/a1.jpg" alt=" " />
								</div>
								<div class="flex-info flex-info3">
									<h4>Step 1
										<span >Registration</span>
									</h4>
									<p>Click here for registration. <a style="background-color:white" href="registration.php">Registration</a></p>
								</div>
							</div>

						</li>

						<li>
							<div class="laptop">
								<div class="img-box">
									<img class="img-responsive zoom-img" src="images/a2.jpg" alt=" " />
								</div>
								<div class="flex-info flex-info3">
									<h4>Step 2
										<span>Watch video</span>
									</h4>
									<p>Log in first to watch videos.<a style="background-color:white" href="login.php">Log in</a></p>
								</div>
							</div>

						</li>
            <li>
              <div class="laptop">
                <div class="img-box">
                  <img class="img-responsive zoom-img" src="images/a4.png" alt=" " />
                </div>
                <div class="flex-info flex-info3">
                  <h4>Step 3
                    <span >Invite friends</span>
                  </h4>
                  <p>Invite friends with your reference ID.</p>
                </div>
              </div>

            </li>
						<li>
							<div class="laptop">
								<div class="img-box">
									<img class="img-responsive zoom-img" src="images/a3.jpg" alt=" " />
								</div>
								<div class="flex-info flex-info3">
									<h4>Step 4
										<span>Earn money</span>
									</h4>
									<p>Check your profile how much you earned.</p>
								</div>
							</div>

						</li>

					</ul>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <?php
              include_once "connection.php";
              $sql = "SELECT * FROM gallery where g_id=2";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      $sec=$row['image_name'];
                  }
                }

                if(isset($sec)){
                    echo '<img class="img-responsive" style="    max-height: 120px; width: 100%;" src="admin/pages/layout/gallery/'.$sec.' " alt="Chania">';
                }

               ?>
            </div>


          </div>

				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
	<!-- //about -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Stereo</h4>
					<img src="images/bann.jpg" alt=" " class="img-responsive">
					<h5>We are the best in this field</h5>
					<p>We work closely with you to understand your goals and aims, and then develop a new business plan,Our team of experts
						can help you succeed in managing any kind of conflicts.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->



  <script type="text/javascript">

  function check(){


    return confirm("You need to watch minimum for 2 minutes!");

}

  </script>
	<!-- //services -->
	<!-- Events -->
	<div class="events" id="events">
		<div class="container">
			<h3 class="w3layouts-heading">Latest
				<span>Videos</span> <?php
            if(!isset($_SESSION['user'])){
                ini_set('max_execution_time', 0);
              echo "Log in to see video";
						}else{

						}
				 ?>
			</h3>
			<div class="row">
				<?php
				if(isset($_SESSION['user'])){
            ini_set('max_execution_time', 0);

					include_once "connection.php";
					$id=$_SESSION['user'];
					$sql = "SELECT status FROM user where u_id='$id'";
					$result = mysqli_query($conn, $sql);
$currentdate=date("Y-m-d");
					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
                    $status=$row['status'];
					}
				}
$user_id=$_SESSION['user'];
				if($status=='active'){
					$sql = "SELECT * FROM video order by v_id desc ";
	$result = mysqli_query($conn, $sql);
$count=0;
	if (mysqli_num_rows($result) > 0) {
		 // output data of each row
		 while($row = mysqli_fetch_assoc($result)) {
if($count==6){
  break;
}

       $video_id=$row['v_id'];

       $status_video='no';
              $sql2 = "SELECT * FROM view where video_id='$video_id' and user_id='$user_id'";

              $result2 = mysqli_query($conn, $sql2);

              if (mysqli_num_rows($result2) > 0) {
              // output data of each row
              while($row2 = mysqli_fetch_assoc($result2)) {
                $date=$row2['date'];

                if($date==$currentdate){
                   $status_video='yes';
                }
              }
            }


if($status_video=='no'){
  $count++;
  echo '	<div class="col-md-6">
  <div class=" events-grids">
     <div  class="thumbnail events-wthree">
       <img style="max-height:300px" src="video/'.$row['image'].'" class="img-responsive" alt="">
       <div class="social-icons events-icons right-w3-agile1-sectn fotw3ls3">
         <div class="caption">
           <h4>
             <a href="#" style="

  overflow-y: scroll;

  height:25px" class="paragraph-w3l" data-toggle="modal" data-target="#myModal1">'.$row['title'].'</a>
           </h4>
           <div class="event-top">
             <p>
               <span class="fa fa-calendar" aria-hidden="true"></span> '.$row['date'].'</p>
           </div>
           <p style="

  overflow-y: scroll;

  height:65px" class="paragraph-w3l">'.$row['description'].'</p>
         </div>
         <div class="event-bottom">
           <ul>
             <li>

             </li>
             <li>

             </li>
             <li>

               <a  target="_blank" onclick="return check();" href="play_video.php?v_id='.$row['v_id'].'">
                 <span class="fa fa-play"></span>
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div>

   </div>
   </div>';

}

		 }
	} else {

	}
				}

	  include_once "connection.php";
				}


				 ?>


				<div class="clearfix"> </div>
        <div class="row">
          <div class="col-md-5 col-sm-4 col-xs-4">

          </div>
          <div class="col-md-5 col-sm-5 col-xs-5">
            <?php
              	if(isset($_SESSION['user'])){
                   echo '<a class="btn btn-lg btn-danger" href="all_video.php">See All</a>';
                }
             ?>

          </div>
        </div>
			</div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <?php
          include_once "connection.php";
          $sql = "SELECT * FROM gallery where g_id=3";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $third=$row['image_name'];
              }
            }

            if(isset($third)){
                echo '<img class="img-responsive" style="    max-height: 120px; width: 100%;" src="admin/pages/layout/gallery/'.$third.' " alt="Chania">';
            }

           ?>
        </div>


      </div>
		</div>

	</div>
	<!-- //Events -->



	<!-- testimonials -->

<?php
include_once('connection.php');
$sql = "SELECT * FROM link";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $fb=$row['fb'];
        $email=$row['email'];
        $youtube=$row['youtube'];
    }
} else {

}

mysqli_close($conn);
 ?>
	<!-- contact -->
	<!-- mail -->
	<div class="contact-sectn" id="contact">
		<div class="container">
			<h3 class="w3layouts-heading white-title">Contact
				<span>Us</span>
			</h3>
			<div class="w3-agile_mail_grids">
				<div class="col-md-5 contact-left-w3-agile-sectn">
					<h2>Contact Info</h2>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-facebook" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
							<h4>Visit us facebook</h4>
							<p> <a target="_blank" href="<?php echo $fb; ?>"> click here</a> for Facebook page</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-w3ls">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
							<h4>Mail us</h4>
							<p>
								<a href=""><?php echo $email; ?></a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-youtube-play" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
              <h4>Visit us youtube</h4>
							<p> <a target="_blank" href="<?php echo $youtube; ?>"> click here</a> for youtube channel</p>
						</div>
						<div class="clearfix"></div>
					</div>
          <div class="call">
            <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
              <span class="fa fa-phone" aria-hidden="true"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 contact-text-w3-agile">
              <h4>Contact phone no</h4>
              <p>01726989577</p>
            </div>
            <div class="clearfix"></div>
          </div>
				</div>
				<div class="col-md-7 w3-agile_mail_grid_right">
					<h3>Please fill this form to contact with us.</h3>
					<form action="message.php" method="post">
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="phone" placeholder="Telephone" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //mail -->
	<!-- map -->

	<!-- //map -->
	<!-- /contact -->
  <div class="copy">
		<p>Developed by
			<a target="_blank" href="http://mdmasum.org/"> Md Masum Billah</a>
		</p>
	</div>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function () {});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->
	<!-- about-section-flexisel-slider-->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- //about-section-flexisel-slider-->
	<script src="js/jzBox.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling -->
	<script src="js/bootstrap.js"></script>

</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/12-03-2018/stereo-demo_Free/1055858451/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 07:51:35 GMT -->
</html>
