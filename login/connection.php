<?php
$server="localhost";
$user="root";
$password="";
$db="hotel restautrant_db";

$con =mysqli_connect($server,$user,$password,$db);

if($con){
     ?>
     <script>
          alert("connection successful");
     </script>
     <?php
}else{
     ?>
     <script>
          alert(" no connection ");
     </script>
     <?php
}

?>