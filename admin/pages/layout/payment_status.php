<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location:index.php");
}else{

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
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
      <span class="logo-mini"><b>C</b>AM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cam</b>TOR</span>
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

    <!-- Main content -->
    <section class="content">


      <div class="row">

        <div class="col-lg-12 col-md-12 " style="padding:10px;border:1px solid #9C9C9C;margin:5px;border-radius:10px;">
                <form  action="new_payment_add.php" method="post">
                  <div class="row">
                    <div class="col-lg-1 col-md-1">
                      <div class="form-group">
                        <label for="pwd">Method:</label>
                        <select name="mayment_method" class="form-control" name="">
                          <option value="">select one</option>
                          <option value="Hand Cash">Hand Cash</option>
                          <option value="Bkash">Bkash</option>
                          <option value="DBBL">DBBL</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="pwd">Txt ID:</label>
                        <input type="text" name="pay_id" class="form-control" id="pwd">
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <div class="form-group">
                        <label for="pwd">Amount(TK):</label>
                        <input type="number" name="payed_amount" step=0.01 class="form-control" id="pwd">
                      </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                      <div class="form-group">
                        <label for="pwd">DUE:</label>
                        <input type="number" disabled  style="font-weight:bold;font-size:20px" class="form-control" id="due">
                      </div>
                    </div>
                    <!--<input type="hidden" value="<?php // echo $_POST['s_id'] ?>" name="s_id" class="form-control" id="pwd">-->
                    <input type="hidden" value="<?php echo isset($_POST['s_id']) ? $_POST['s_id'] : ''; ?>" name="s_id" class="form-control" id="pwd">

                    <div class="col-lg-1 col-md-1">
                        <button style="margin-top:26px" type="pay"  class="btn btn-danger">submit</button>
                    </div>


                              <div class="col-md-3 col-lg-3">
                                <a style="margin-top:26px"  href="all_user.php"  class="btn btn-danger">All user</a>
                                <a style="margin-top:26px"  href="request_money.php"  class="btn btn-danger">Requested user</a>

                              </div>

                  </div>


            </form>

        </div>
      </div>

<div class="row">
  <div class="col-md-4">
    <div class="col-md-6">
      <div class="table-wrapper-scroll-x">
        <table class="table">
            <thead>

              <tr class="danger">
                <td>Total view</td>
                <td>Payable amount</td>



              </tr>

              <?php
                include_once "../../../connection.php";
                    // Check connection
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    if(isset($_GET['id'])){
                      $s_id=$_GET['id'];
                      $_SESSION['s_id']=$s_id;
                    }else{
                      $s_id=$_SESSION['s_id'];
                    }


                    $total_payable=0;
                    $sql = "SELECT sum(amount) as payable,count(user_id) as view  FROM view where user_id='$s_id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='info'>";
                          echo "<td>".$row['view']."</td>";
                          echo "<td>" . $row["payable"]."</td>";
                          $total_payable=$total_payable+ $row["payable"];

                        //  echo '<td><a href="set_batch_delete.php?id='.$row['payable_id']. '"">
          //<span class="glyphicon glyphicon-remove"></span>
        //</a>

    //</td>';
                        echo "</tr>";
                      }




                      echo "</tr>";
                    } else {
                      echo "0 results";
                    }


                  ?>

            </tbody>
          </table>

      </div>
    </div>
    <div class="col-md-6">
      <div class="table-wrapper-scroll-x">
        <table class="table">
            <thead>

              <tr class="danger">
                <td>Total Refered</td>
                <td>Payable amount</td>



              </tr>

              <?php


              if(isset($_GET['ref_num'])){
                $ref_id=$_GET['ref_num'];
                $_SESSION['ref_id']=$ref_id;
              }else{
                $ref_id=$_SESSION['ref_id'];
              }
                    $r_total_payable=0;

                    $sql = "SELECT sum(amount) as payable,count(r_id) as ref  FROM reference where refered_id='$ref_id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='info'>";
                          echo "<td>".$row['ref']."</td>";
                          echo "<td>" . $row["payable"]."</td>";
                          $r_total_payable=$r_total_payable+ $row["payable"];

                        //  echo '<td><a href="set_batch_delete.php?id='.$row['payable_id']. '"">
          //<span class="glyphicon glyphicon-remove"></span>
        //</a>

    //</td>';
                        echo "</tr>";
                      }




                      echo "</tr>";
                    } else {
                      echo "0 results";
                    }


                  ?>

            </tbody>
          </table>

      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="table-wrapper-scroll-x">
      <table class="table">
          <thead>

            <tr class="danger">
              <td>Date</td>
                <td>payment method</td>
                <td>pay id</td>
              <td>Payed amount</td>


              <td>Action</td>
            </tr>

            <?php


                  $total_payed=0;
                  $sql = "SELECT * FROM payed where user_id='$s_id'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr class='info'>";
                      echo "<td>" . $row["date"]."</td>";
                        echo "<td>" . $row["mayment_method"]."</td>";
                        echo "<td>" . $row["pay_id"]."</td>";
                        echo "<td>" . $row["payed_amount"]."</td>";
                        $total_payed=$total_payed+ $row["payed_amount"];

                        echo '<td><a href="delete_payed.php?id='.$row['p_id']. '"">
        <span class="glyphicon glyphicon-remove"></span>
      </a>

</td>';
                      echo "</tr>";
                    }
                    echo "<tr class='success'>";
                    echo "<td></td>";
                    echo "<td></td>";
                      echo "<td>Total </td>";
                      echo "<td>" .$total_payed."</td>";
                      echo "<td></td>";


                    echo "</tr>";
                  } else {
                    echo "0 results";
                  }

                  mysqli_close($conn);
                }
                ?>

          </tbody>
        </table>

    </div>
  </div>
</div>

<!--this scrip is used for set due -->
<script type="text/javascript">
    var total_payable = "<?php Print($total_payable+$r_total_payable); ?>";
    var total_payed = <?php Print($total_payed); ?>;
    var due=total_payable-total_payed;
    console.log(due);
    document.getElementById("due").value = due;
</script>



    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
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