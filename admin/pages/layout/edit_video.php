<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>in</b>come</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>in</b>come</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Md Masum Billah</p>
          <a href="../../logout.php"><i class="fa fa-circle text-success"></i> LOG OUT</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../admin.php">
            <i class="fa fa-dashboard"></i> <span href="../../admin.php">Dashboard</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>New Request</span>
            <span class="pull-right-container">


            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="table.php"><i class="fa fa-circle-o"></i> Check request</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>request(for payment)</span>
            <span class="pull-right-container">


            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="request_money.php"><i class="fa fa-circle-o"></i> Check request</a></li>
            </ul>
        </li>
        <li>
          <a href="add_video.php">
            <i class="	glyphicon glyphicon-plus"></i> <span href="add_video.php">Add video</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class="glyphicon glyphicon-envelope"></i> <span href="add_student.php">message</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="set_payment.php"><i class="fa fa-circle-o"></i> Set Payment</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-film"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="all_video.php"><i class="fa fa-circle-o"></i> All videos</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="all_user.php"><i class="fa fa-circle-o"></i> All user</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-file"></i> <span>Notice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="new_notice.php"><i class="fa fa-circle-o"></i>New notice</a></li>
                <li><a href="all_notice.php"><i class="fa fa-circle-o"></i>All notice</a></li>
            </ul>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="	fa fa-bullhorn"></i> <span>Ad Panel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">


                <li><a href="show_gallery.php"><i class="fa fa-circle-o"></i>Change Ad</a></li>
            </ul>


        </li>

        <li class="treeview">
          <a href="#">
            <i class="	glyphicon glyphicon-file"></i> <span>Social link</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="new_notice.php"><i class="fa fa-circle-o"></i>Current link</a></li>
            </ul>


        </li>



        <li>
          <a href="new_password.php">
            <i class="glyphicon glyphicon-lock"></i> <span href="add_student.php">Change Password</span>

          </a>
        </li>


    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

<?php
include_once "../../../connection.php";
if(!isset($_GET['id'])){
header('Location:all_student.php');
}else{

  $id=$_GET['id'];
}
$sql = "SELECT * FROM video where v_id='$id'";
$result = mysqli_query($conn, $sql);
$_SESSION['student_id']=$id;
if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($_row = mysqli_fetch_assoc($result)) {

       $title = $_row['title'];
       $description=$_row['description'];
       $link = $_row['link'];
$image=$_row['image'];
$_SESSION['image']=$image;

   }
} else {
   echo "0 results";
}


 ?>
    <!-- Main content -->
    <div class="container" >
      <div class="row" >


        <div class="col-lg-12 col-md-12 " style="padding:10px;border:1px solid #9C9C9C;margin-bottom:5px;border-radius:10px;">
                <form method="post" action="edit_video_done.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="name">Title:</label>
                        <input required type="text" class="form-control" value="<?php echo  $title;?>" name="title" id="name">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label for="nick_name">Description:</label>

                            <textarea name="description" rows="3" style="width:100%"><?php echo $description; ?></textarea>

                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <!-- image-preview-filename input [CUT FROM HERE]-->
                      <!-- image-preview-filename input [CUT FROM HERE]-->
                    <script type="text/javascript">
                    $(document).on('click', '#close-preview', function(){
      $('.image-preview').popover('hide');
      // Hover befor close the preview
      $('.image-preview').hover(
          function () {
             $('.image-preview').popover('show');
          },
           function () {
             $('.image-preview').popover('hide');
          }
      );
    });

    $(function() {
      // Create the close button
      var closebtn = $('<button/>', {
          type:"button",
          text: 'x',
          id: 'close-preview',
          style: 'font-size: initial;',
      });
      closebtn.attr("class","close pull-right");
      // Set the popover default content
      $('.image-preview').popover({
          trigger:'manual',
          html:true,
          title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
          content: "There's no image",
          placement:'bottom'
      });
      // Clear event
      $('.image-preview-clear').click(function(){
          $('.image-preview').attr("data-content","").popover('hide');
          $('.image-preview-filename').val("");
          $('.image-preview-clear').hide();
          $('.image-preview-input input:file').val("");
          $(".image-preview-input-title").text("Browse");
      });
      // Create the preview image
      $(".image-preview-input input:file").change(function (){
          var img = $('<img/>', {
              id: 'dynamic',
              width:250,
              height:200
          });
          var file = this.files[0];
          var reader = new FileReader();
          // Set preview image into the popover data-content
          reader.onload = function (e) {
              $(".image-preview-input-title").text("Change");
              $(".image-preview-clear").show();
              $(".image-preview-filename").val(file.name);
              img.attr('src', e.target.result);
              $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
          }
          reader.readAsDataURL(file);
      });
    });
                    </script>
                    <style media="screen">
                    .container{
                            margin-top:20px;
                          }
                          .image-preview-input {
                            position: relative;
                          overflow: hidden;
                          margin: 0px;
                            color: #333;
                            background-color: #fff;
                            border-color: #ccc;
                          }
                          .image-preview-input input[type=file] {
                          position: absolute;
                          top: 0;
                          right: 0;
                          margin: 0;
                          padding: 0;
                          font-size: 20px;
                          cursor: pointer;
                          opacity: 0;
                          filter: alpha(opacity=0);
                          }
                          .image-preview-input-title {
                            margin-left:2px;
                          }
                    </style>
                       <label for="email">thumbnail:(<span style="font-weight:bold;color:red">UP TO 2MB</span>)</label>
               <div class="input-group image-preview">

                   <input type="text" value="<?php echo $image; ?>"  class="form-control image-preview-filename" > <!-- don't give a name === doesn't send on POST/GET -->
                   <span class="input-group-btn">
                       <!-- image-preview-clear button -->
                       <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                           <span class="glyphicon glyphicon-remove"></span> Clear
                       </button>
                       <!-- image-preview-input -->
                       <div class="btn btn-default image-preview-input">
                           <span class="glyphicon glyphicon-folder-open"></span>
                           <span class="image-preview-input-title">Browse</span>
                           <input type="file" accept="image/png, image/jpeg, image/gif" name="file" id="image"/> <!-- rename it -->
                       </div>
                   </span>
               </div><!-- /input-group image-preview [TO HERE]-->
                    </div>
                    <div class="col-md-2">
                      <div class="container">

         <img src="../../../video/<?php echo $image ?>" class="img-thumbnail" style="height:100px;width:150px" alt="Cinque Terre" width="304" height="236">
       </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="pwd">Pest embaded link:</label>
                          <textarea name="link" rows="3" style="width:100%"><?php echo $link;  ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="pwd">your uploaded video:</label>
                          <?php echo $link;  ?>
                        </div>
                    </div>

                  </div>





              <button style="" type="submit" name="submit"  class="btn btn-info">Submit</button>

            </form>

        </div>

      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://softcareit.com/">SoftCare IT</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
