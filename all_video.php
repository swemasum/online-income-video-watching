<?php
session_start();
if(!isset($_SESSION['user'])){
header('Location:index.php');
}

 ?>

         <!--
         Author: W3layouts
         Author URL: http://w3layouts.com
         License: Creative Commons Attribution 3.0 Unported
         License URL: http://creativecommons.org/licenses/by/3.0/
         -->
         <!DOCTYPE html>
         <html lang="zxx">


         <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/12-03-2018/stereo-demo_Free/1055858451/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 07:51:10 GMT -->
         <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
         <head>
         	<title>income online bd</title>
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
         											<a class="cd-search-trigger" href="#cd-search">
         												<span></span>
         											</a>
         										</li>
         									</ul>
         									<!-- cd-header-buttons -->
         								</div>
         								<div id="cd-search" class="cd-search">
         									<form action="#" method="post">
         										<input name="Search" type="search" placeholder="Click enter after typing">
         									</form>
         								</div>
         							</div>


         							<div class="clearfix"> </div>
         						</nav>
         					</div>
         				</div>
         </div>

         </div>
         </div>

         <script type="text/javascript">

         function check(){


           return confirm("You need to watch minimum for 2 minutes!");

       }

         </script>

         <div class="row">
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

                $video_id=$row['v_id'];

                $status_video='no';
                       $sql2 = "SELECT * FROM view where video_id='$video_id' and user_id='$user_id' ";

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

           echo '	<div class="col-md-4">
           <div class=" events-grids">
              <div  class="thumbnail events-wthree">
                <img style="max-height:250px;min-height:250px" src="video/'.$row['image'].'" class="img-responsive" alt="">
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
         		 echo "0 results";
         	}
         				}

         	  include_once "connection.php";
         				}


         				 ?>



         				<div class="clearfix"> </div>

         			</div>
         		</div>

         	</div>
         	<!-- //Events -->
         </div>
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
