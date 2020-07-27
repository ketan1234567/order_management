<aside class="main-sidebar">
   <?php
$con= mysqli_connect("localhost","root","","hotel restautrant_db");
?>
   
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="">
          <img src="../images/ketan2.png"  class="img img-responsive" style="height: 130px; width: 100px;margin-left: 40px;" alt="User Image">
          <?php
          $res=mysqli_query($con,"select * from waiter_info where waiter_id='".$_SESSION['anil']."'");
          $row=mysqli_fetch_row($res);
          echo"<h3 style=margin-left:40px;><p style=color:white;>$row[1]</p></h3>";
          ?>
        </div><br>
        <div class="pull-left info " >
          
        </div><br>
      </div>
      <br>
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="index.php" style="color: white;"></i><h5 style="font-size: 25px;">Home</h5></a></li>
        

        

        

        
        
         


             <li class="treeview" >
          <a href="#" style="color: white;">
            <i class="fa fa-files-o fa fa-angle-left pull-right" style="margin-left: 10px;" ></i>
            <span><h5 style="font-size: 25px;">Create order
             </h5></span>
            <span class="pull-right-container" >
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="create_order.php" style="color: white;"><i class="fa fa-circle-o"></i> create Order</a></li>
            
          </ul>
        </li>


      


      

        <!-- <li><a href="work.php"><i class="fa fa-home"></i> Today's Work</a></li> -->
       <!--  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>