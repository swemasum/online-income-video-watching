<?php session_start(); ?>
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
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="admin/css/style.min.css">
<link rel="stylesheet" href="admin/css/custom.css">

        </head>

        <body>
        <script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

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

                                     $sql = "DELETE FROM notification WHERE u_id='$u_id' and notice=1";

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
                                      } else {
                                        $notification="00";
                                        $notice="00";
                                          $payment="00";
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


      <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body">

                   <div class="row" style="margin-bottom:20px;margin-top:10px">
               <div class="col-md-4 col-sm-4" style="MARGIN-LEFT:20PX   ">
                 <form class="" action="notice.php" method="post">
                   <div class="form-group ">
                     <select name="date" class="form-control" >

                       <option value="">Select Date:</option>

                                      <?php
                                        include_once "connection.php";
                                            // Check connection
                                            if (!$conn) {
                                              die("Connection failed: " . mysqli_connect_error());
                                            }

                                            $sql = "select date from notice group by date order by date desc ";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                              // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {

                                                echo '<option value="'.$row['date'].'">'.$row['date'].'</option>'  ;



                                              }
                                            } else {
                                              echo "0 results";
                                            }


                                          ?>



                     </select>
                       </div>
               </div>


               <div class="col-md-1 col-sm-1">
                 <input type="submit" class="btn btn-danger" name="submit" value="search">
                  </form>
               </div>

    <div class="col-md-1">

    </div>
               <form class="" action="notice.php" method="post">

             <div class="col-md-4 col-sm-4">
                 <div class="form-group ">
              <input type="text" name="search" class="form-control" value="" PLACEHOLDER="Title/Notice">
                     </div>
             </div>


             <div class="col-md-1 col-sm-1">
               <input type="submit" class="btn btn-danger" name="submit" value="search" >
             </div>

               </form>

           </div>


               </div>
           </div>

       </div>


    </div>

        <div class="row">
          <div class="col-md-2">

          </div>
          <div  style="margin-top:5px;">
            <div class="container">
              <div class="row">
            <div class="col-md-12">

              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <?php
                          include_once "connection.php";
                              // Check connection
                              if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                              }

                              if(isset($_POST['date'])){
                                $date=$_POST['date'];
                                $sql = "SELECT * FROM notice where date='$date'";
                              }else if(isset($_POST['search'])){
                                      $search=$_POST['search'];
                                      $sql = "SELECT * FROM notice where title like '%$search%' or notice like '%$search%' ";

                                  }else{
                                $sql = "SELECT * FROM notice order by n_id desc";

                              }

                              $result = mysqli_query($conn, $sql);

                              if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                 echo '<div class="item">';
                                 echo '  <span href="#" class="probootstrap-featured-news-box">';
                                 echo '  <figure class="probootstrap-media"></figure>';
                                 echo '<div class="probootstrap-text">';

                                 echo '<h3 style="font-weight:bold">'.$row['title'].'</h3>';
                                echo '  <p style="overflow-y: scroll;max-height:85px">'.$row['notice'].'</p>';
                                 echo '<div class="row">
                                   <div class="col-md-6">';
                                 echo '<span class="probootstrap-date"><i class="fa fa-calendar" aria-hidden="true"></i>'.$row['date'].'</span>';
                                echo '</div> <div class="col-md-6">';

                                if($row['file_name']!= ''){
                                  echo '<span class="probootstrap-date "><a href="Admin/pages/layout/uploads/'.$row['file_name'].'"><i class="fa fa-download" aria-hidden="true"></i></a>Download file</span>';

                                }
                               echo ' </div>
                                </div>';


                                echo '</div>';

                               echo '</span>';

                            echo '</div>';

                                }
                              } else {
                                echo "0 results";
                              }

                              mysqli_close($conn);

                            ?>

                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="notice.php" class="btn btn-primary">View all news</a></p>
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div>

        </div>
          </div>
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
