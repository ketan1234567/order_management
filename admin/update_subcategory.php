<?php
session_start();
if (!isset($_SESSION['admin'])) {

  header('location:./login/login.php');
  # code...
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php
$connect= mysqli_connect("localhost","root","","hotel restautrant_db");
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Resuturant</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-mini" style="background-color: #4B515D;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-family: Broadway "></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-family: Broadway; color: orange"><b ></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php
    include("nav.php");
    ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php
       $did=$_GET['id'];
      $res=mysqli_query($connect,"select * from  subcategorytbl where 
         Subcategory_id ='".$did."'");
       $row=mysqli_fetch_row($res);
      ?>
      
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->

     <section class="content">
      <div class="row">
        <div class="col-sm-2"></div>
       
        <div class="col-sm-5">
          <div class="box box-warning">
            <div class="box-header with-border btn btn-primary">
              <h3 class="box-title" style="margin-left: 20px; "> Edit  Food sub Menu and price </h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
               <form   action="update_subcategory.php?id=<?php echo $did?>" method="POST"role="form">                <!-- text input -->
                <!-- <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                </div>  -->

            
                
              
                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group row">

                        <label class="col-sm-4 ">Category</label>
                          <div class="col-sm-8">
                       <select class="form-control" name="CATEGORY_ID">
                        <option>  <?php echo$row['1']?></option>
                        <?php
                        $shop=mysqli_query($connect,"select * from Category");
                        while($shop1=mysqli_fetch_row($shop))
                        {
                           echo
                            '<option value="'.$shop1[1].'">'.$shop1[1].'</option>';
                        }
                        ?>
                         </select>
                      </div>
                    </div>
                  </div>
                     <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group row">
                        <label class="col-sm-5">Full Plate Price</label>
                          <div class="col-sm-7">
                          <input type="text" name="full_price" class="form-control" placeholder="full_price" value="<?php echo $row[2]?>">
                            <input type="hidden"  value="<?php echo $did?>" class="form-control" name="did" placeholder="Enter ...">
`

                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <br>

                <!---add another filed-->
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group row">

                        <label class="col-sm-4">items</label>
                          <div class="col-sm-8">
                        <select class="form-control" name="name">
                       Select categories <option> <?php echo$row[3]?></option>
                        <?php
                        $shop=mysqli_query($connect,"select * from  subcategorytbl");
                        while($shop1=mysqli_fetch_row($shop))
                        {
                           echo
                            '<option value="'.$shop1[2].'">'.$shop1[2].'</option>';
                        }
                        ?>
                         </select>
                      </div>
                    </div>
                  </div>
                     <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group row">
                        <label class="col-sm-5">Half Plate</label>
                          <div class="col-sm-7">
                        <input type="text" name="half_price" class="form-control" placeholder="half_price"  value="<?php echo $row[4]?>">
                          <input type="hidden"  value="<?php echo $did?>" class="form-control" name="did" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  




                  

                </div>
              </br>
                
              </br>
                <div class="row">
                  <div class="col-sm-4">
             
                    <div class="form-group" style="margin-left: 120px;">
                      <button type="submit" name="save" class="btn btn-success">  Submit</button>
                    </div>
                  </div>
                         
                          
                </div>


                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
         


      </div>
    </section>
  </div>
  
  

    
    <!-- Main content End -->

  <footer class="main-footer" style="background-color: #4B515D; color: white;" >
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Created By</a>.</strong> Deshmukh Ketan 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
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
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","hotel restautrant_db");


if(isset($_POST['save']))
 {
  
   $CATEGORY_ID=$_POST['CATEGORY_ID'];
     $full_price=$_POST['full_price'];
    $name=$_POST['name']; 
     $half_price=$_POST['half_price']; 
  $did=$_POST['did'];
 if(mysqli_query($connect,"update subcategorytbl set  CATEGORY_ID='".$CATEGORY_ID."',full_price='".$full_price."',name='".$name."',half_price='".$half_price."' where Subcategory_id ='".$did."'"))
  {
    echo'
    <script>
    alert("update added");
    window.location.href="add_sub.php";
    </script>';
  }

  else
  {
    echo'
    <script>
    alert("Try again");
    window.location.href="add_sub.php";
    </script>';
  }
 }

?>