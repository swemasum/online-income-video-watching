<?php
ini_set('max_execution_time', 0);
session_start();
ini_set('max_execution_time', 0);
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
	<link href="http://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,800,900" rel="stylesheet">
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
									<a href="index.php"><img src="images/logo.png" width="100px" alt=""></a>
								</h1>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php" >Go back</a>
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

                             $sql = "DELETE FROM notification WHERE u_id='$u_id' and payment=1";
                             mysqli_query($conn, $sql);



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

                  <a href="account.php"><input type="submit" value=" payment notification:<?php echo $payment ?> "></a>
                  <a href="notice.php"><input type="submit" value=" New notice notification:<?php echo $notice ?> "></a>

                </div>
              </div>


							<div class="clearfix"> </div>
						</nav>
					</div>
				</div>
</div>

</div>
</div>


  <?php
ini_set('max_execution_time', 0);
  if(isset($_SESSION['user'])){
    $id=$_SESSION['user'];
    include_once "connection.php";
    $sql = "SELECT name,status,bd_no FROM user where u_id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $name=$row['name'];
      $status=$row['status'];
      $bd_no=$row['bd_no'];

    }
    } else {

    }


    $sql = "SELECT count(u_id) as total_user FROM user";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      $total_user=$row['total_user'];
    }
    } else {

    }



ini_set('max_execution_time', 0);
$id=$_SESSION['user'];
$income=0;
$total_video=0;


    $sql = "SELECT sum(amount) as income,count(video_id) as total_video FROM view where user_id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $income=$income+$row['income'];
      $total_video=$total_video+$row['total_video'];
    }
    } else {

    }
$ref_id=$_SESSION['ref_num'];
$total_ref=0;
    $sql = "SELECT r_id,amount FROM reference where refered_id='$ref_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $income=$income+$row['amount'];
      $total_ref++;
    }
    } else {

    }


    $receive=0;

        $sql = "SELECT sum(payed_amount) as payed_amount FROM payed where user_id='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $receive=$receive+$row['payed_amount'];
        }

      }

      $payable=$income-$receive;
  }

   ?>

  <?php

if(isset($_SESSION['user'])){
  $user=$_SESSION['user'];

$sql = "SELECT * FROM request where user_id='$user'";
$result = mysqli_query($conn, $sql);
$requested="no";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $requested="yes";
    }
} else {

}
  ini_set('max_execution_time', 0);
  if($requested=="no" && $payable>=50){
    echo '	<div class="services-agileits-w3layouts">
    		<div class="container">
    			<div class="services-agileits-w3layouts-w3layouts">
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-bookmark-o" aria-hidden="true"></i>

    					<p class="paragraph-w3l">'.$status.'  </p>
    					<h4>Status </h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-money" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$payable.'TK </p>
    					<h4>Payable <a class="btn btn-primary" href="request.php?u_id='.$user.'" >Request</a></h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-user" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$name.'</p>
    					<h4>Name</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-phone" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$bd_no.'</p>
    					<h4>DBBL/Bkash no</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-handshake-o" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$total_ref.'</p>
    					<h4>Total Reference</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-money" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$receive.'TK</p>
    					<h4>Total received</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-video-camera" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$total_video.'</p>
    					<h4>Total watched video</h4>
    				</div>

    				<img src="images/services1.png" class="img-responsive" alt="" />
    				<div class="clearfix"> </div>
    			</div>
    		</div>
    	</div>';
  }else if($requested=="yes"){
    echo '	<div class="services-agileits-w3layouts">
    		<div class="container">
    			<div class="services-agileits-w3layouts-w3layouts">
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-bookmark-o" aria-hidden="true"></i>

    					<p class="paragraph-w3l">'.$status.'  </p>
    					<h4>Status </h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-money" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$payable.'TK </p>
    					<h4>Withdrawable cash <a class="btn btn-primary" title="you have requested already" disabled="disabled" href="#'.$user.'" >Requested</a></h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-user" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$name.'</p>
    					<h4>Name</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-phone" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$bd_no.'</p>
    					<h4>DBBL/Bkash no</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-handshake-o" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$total_ref.'</p>
    					<h4>Total Referred</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-money" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$receive.'TK</p>
    					<h4>Total received</h4>
    				</div>
    				<div class="col-md-3 service-agileinfo-grids">
    					<i class="fa fa-video-camera" aria-hidden="true"></i>
    					<p class="paragraph-w3l">'.$total_video.'</p>
    					<h4>Total watched video</h4>
    				</div>
    				<img src="images/services1.png" class="img-responsive" alt="" />
    				<div class="clearfix"> </div>
    			</div>
    		</div>
    	</div>';
  }else if($payable<50){

    echo '	<div class="services-agileits-w3layouts">
        <div class="container">
          <div class="services-agileits-w3layouts-w3layouts">
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-bookmark-o" aria-hidden="true"></i>

              <p class="paragraph-w3l">'.$status.'  </p>
              <h4>Status </h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-money" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$payable.'TK </p>
              <h4>Payable <a class="btn btn-primary" title="you may request only if payable amount is more than 50 tk" disabled="disabled" href="#'.$user.'" >Request</a></h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$name.'</p>
              <h4>Name</h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$bd_no.'</p>
              <h4>DBBL/Bkash no</h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$total_user.'</p>
              <h4>Total user</h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-money" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$receive.'TK</p>
              <h4>Total received</h4>
            </div>
            <div class="col-md-3 service-agileinfo-grids">
              <i class="fa fa-video-camera" aria-hidden="true"></i>
              <p class="paragraph-w3l">'.$total_video.'</p>
              <h4>Total watched video</h4>
            </div>
            <img src="images/services1.png" class="img-responsive" alt="" />
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>';
  }


}

   ?>

	<!--// title-with-image -->

	<!-- //services -->




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
