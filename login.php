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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>

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
\

							<div class="clearfix"> </div>
						</nav>
					</div>
				</div>
</div>

</div>
</div>
<div class="row" style="margin-top:5px;margin-bottom:5px">

  <div class="container">
\
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="loggedin.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
															<?php
																 if(isset($_GET["mess"])){
																	 ECHO "<strong style='color:red'>***Wrong email/password </strong>";
																 }
															 ?>
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-user"></i> Log in</h3>
                                    <p class="m-0">You are most welcome!</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info">EMAIL</i></div>
                                        </div>
                                        <input type="email" class="form-control"  name="email"   required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-key text-info">PASSWORD</i></div>
                                        </div>
                                        <input type="password" class="form-control" id="nombre" name="password"  required>
                                    </div>
                                </div>



                                <div class="text-center">
                                    <input type="submit" name="login" value="Login" class="btn btn-info btn-block rounded-0 py-2">
																		<p><a href="enteremailans.php">Forgot password!!!</a></p>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
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
