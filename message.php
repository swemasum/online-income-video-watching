


       <?php

       if(isset($_POST['submit'])){
INCLUDE_ONCE('connection.php');
         $name=mysqli_real_escape_string($conn,$_POST['name']);
         $phone=mysqli_real_escape_string($conn,$_POST['phone']);
          $email=mysqli_real_escape_string($conn,$_POST['email']);
           $subject=mysqli_real_escape_string($conn,$_POST['subject']);
            $message=mysqli_real_escape_string($conn,$_POST['message']);

       $date=date("Y-m-d");
         $sql = "INSERT INTO message(name,phone,subject,email,message,status)
       VALUES ('$name', '$phone','$subject','$email','$message','unchecked')";

       if (mysqli_query($conn, $sql)) {

       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);
     }else{
       header("Location:index.php");
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
        	<title>Stereo Entertainment Category Bootstrap responsive Website Template | Home :: W3layouts</title>
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
        <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4" style="margin-top:5px;">
            <div class="container">

        <div class="card" style="width:400px;border:1px solid black ;padding:20px">
        <img class="card-img-top" src="images/animat-checkmark.gif" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title"><?php echo $name ?></h4>
          <p class="card-text">Thanks for your query.Admin will contact with you over your mail or phone.</p>
          <a href="index.php" class="btn btn-primary">Go back</a>
        </div>
        </div>
        <br>

        </div>
          </div>
        </div>
        	<!-- //map -->
        	<!-- /contact -->
          <div class="copy">
        		<p> Developed by
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
