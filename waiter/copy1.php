<?php
  session_start();
  if(!isset($_SESSION['anil'])){
   
echo'
      <script>
      window.location.href="../loginform/login456.php";
      </script>
    ';  
  }else{
    
  }
  ?>
<!DOCTYPE html>
 
<html>
<head>

  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>hotel restautrant </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php
$con= mysqli_connect("localhost","root","","hotel restautrant_db");
?>
 
<body class="hold-transition sidebar-mini" style="background-color:#4B515D;">
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
      
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-sm-2"></div>
             <!--------col--start------->
            <div class="col-sm-7">
              <div class="box box-warning">
                   <div class="box-header with-border text-center bg-green">
                     <h2 class="box-title"  > Create Order</h2>
                     </div>
                        <div class="box-body">
                          <form class="form-horizontal" action="create_order.php" role="form" method="POST">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Order Type</label>

                              <div class="col-sm-4">
                                    <select class="form-control" name="order_type">
                                      <option class="form-control">Take Away </option>
                                      <option class="form-control">Pracel Delivery</option>
                                      <option class="form-control">Dine In</option>
                                      
                                    </select>
                                  </div>

                                  <label for="inputEmail3" class="col-sm-2 control-label">Table No</label>

                              <div class="col-sm-4">
                                    <select class="form-control" name="table_no">
                                      <option class="form-control">01 </option>
                                      <option class="form-control">02</option>
                                      <option class="form-control">03</option>
                                        <option class="form-control">04</option>
                                          <option class="form-control">05</option>
                                      
                                    </select>
                                  </div> 
                              </div>

                                      <!--- customer name ----------- mobile no----->
                            <div class="form-group">
                              <label for="inputEmail3" name="" class="col-sm-2 control-label">Customer Name</label>
                               

                              <div class="col-sm-4">
                                 <input type="text" name="customer_name" class="form-control" placeholder="Customer Name ...">
                                   
                                  </div>
                                </div>


                                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile No</label>


                              <div class="col-sm-4">
                                 <input type="number" name="mobile_no" class="form-control" placeholder="Customer No ...">
                                   
                                  </div>
                              </div>
                               <!---  end customer name ----------- mobile no----->
                               <!---  start category  ----------- Address----->

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                               

                              <div class="col-sm-4">
                                 <select class="form-control" name="category">
                                    <option>Select Catagory</option>
                                    <?php
                                    $cat=mysqli_query($con,"select * from category");
                                    while($cat1=mysqli_fetch_row($cat))
                                    {
                                       echo
                                        '<option value="'.$cat1[1].'">'.$cat1[1].'</option>';
                                    }
                                    ?>
                                  </select>
                                   
                                  </div>


                                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>


                              <div class="col-sm-4">
                              <textarea class="form-control" name="address"></textarea>
                                  </div>
                              </div>
                                       <!---  end category  ----------- Address----->


                                       <!---  start items  ----------- plate----->

                              <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Items</label>
                               

                              <div class="col-sm-4">
                                 <select class="form-control" name="item">
                                    <option>Select Catagory</option>
                                    <?php
                                    $sub=mysqli_query($con,"select * from subcategorytbl");
                                    while($sub1=mysqli_fetch_row($sub))
                                    {
                                      echo
                                        '<option value="'.$sub1[2].'">'.$sub1[2].'</option>';
                                    }
                                    ?>
                                  </select>
                                   
                                  </div>


                                  <label for="inputEmail3" class="col-sm-2 control-label">Plate</label>


                              <div class="col-sm-4">
                              <select class="form-control" name="plate">
                                      <option>Full Plate</option>
                                      <option>Half Plate</option>
                                    </select>
                                  </div>
                              </div>
                                       <!---  end items ----------- plate----->

                                       <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Qty</label>
                               

                              <div class="col-sm-4">
                            <input type="number" name="qty" class="form-control" placeholder="Qty ...">
                                   
                            </div>


                                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>


                              <div class="col-sm-4">
                                <input type="number" name="price" class="form-control" placeholder="price ...">
                                  </div>
                              </div>
                                       <!---  end items ----------- plate----->



                            </div>
                          <!-- /.box-body  end -->

                          <div class="box-footer">
                            <div class="col-sm-12">
                            
                            <button type="submit"  name="save" class="btn btn-info  col-sm-4" style="width: 100px; height: 40px; margin-left: 230px">Submit</button>
                          </div>
                        </div>

                           
                          </div>



                         <!---------new box start---------->
                           <div class="box ">
            <div class="box box-warning">
            <div class="box-header with-border text-center bg-green">
              <h3 class="box-title"  style="color: white;">View Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr style="background-color:lightblue;">
                   <th>Sr.No</th>
                  <th>Category</th>
                  <th>item</th>
                  <th>Qty</th>
                  <th>plate</th>
                   <th>price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                <tr>
                    <?php
                  $sr=1;
                  $res=mysqli_query($con,"select * from create_order");
                  while($row=mysqli_fetch_row($res))
                  {
                    $cat=mysqli_query($con,"select * from create_order where order_id='".$row[0]."'");
                    $cat1=mysqli_fetch_row($cat);
                   echo
                   '<tr>
                      <td>'.$sr.'</td>
                      <td>'.$cat1[5].'</td>
                       <td>'.$row[7].'</td>
                        <td>'.$row[9].'</td>
                         <td>'.$row[8].'</td>
                         <td>'.$row[10].'</td>
                          

                      
                      <td>
                      <a href="update_order.php?id='.$row[0].'"> <center> <button class="btn btn-primary btn-flat">
                          <i class="fa fa-pencil-square-o "></i>
                        </button></center></a>
                      </td>
                      <td>
                       <a href="delete_order.php?id='.$row[0].'"><center> <button class="btn btn-danger btn-flat">
                          <i class="fa fa-times"></i>
                        </button></center></a>
                      </td>
                      
                  </tr>';
                  $sr++;
                  }
               
                ?>
                
                              </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
                <div class="col-sm-12">
                <button type="submit"  name="save" class="btn btn-success  col-sm-4" style="width: 100px; height: 40px; ">Submit Order</button>
                <button type="submit"  name="save" class="btn btn-info  col-sm-4" style="width: 100px; height: 40px;  margin-left: 10px; ">Modify Order</button>
                
                <button type="submit"  name="save" class="btn btn-danger  col-sm-4" style="width: 100px; height: 40px; margin-left: 10px;">Cancel  Order</button>
              </div>
            </div>
          </div>
          </div>
          <!-- /.box -->




                         
                        
             </div>
              <!--------col 07 end--start------->

          


          


                
              </div>

    </div>
         


  </section>
</div>

    
  
  




    <!--end content--->
   
  <footer class="main-footer" style="background-color: #4B515D; color: white;" >
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2019 <a href="#">Created By</a>.</strong> Deshmukh Ketan 
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
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
<?php


if(isset($_POST['save']))
 {
  $order_type=$_POST['order_type'];
  $table_no=$_POST['table_no'];
  $customer_name=$_POST['customer_name'];
  $mobile_no=$_POST['mobile_no'];
  $category=$_POST['category'];
  $address=$_POST['address'];
  $item=$_POST['item'];
  $plate=$_POST['plate'];
  $qty=$_POST['qty'];
  $price=$_POST['price'];

 
if(mysqli_query($con,"insert into create_order values('','".$order_type."','".$table_no."','".$customer_name."','".$mobile_no."','".$category."','".$address."','".$item."','".$plate."','".$qty."' ,'".$price."')"))
  {
    echo'
    <script>
    alert("order Created added");
    window.location.href="create_order.php";
    </script>';
  }

  else
  {
    echo'
    <script>
    alert("Try again");
    window.location.href="create_order.php";
    </script>';
  }
 }

?>