<?php
$connect=mysqli_connect("localhost","root","","hotel restautrant_db");
if(mysqli_query($connect,"delete from create_order where order_id='".$_GET['id']."'"))
{
	echo'
    <script>
    
    alert("order Deleted");
    window.location.href="create_order.php";
    </script>';
}
else
{
	echo'
    <script>
    alert("try again");
    window.location.href="create_order.php";
    </script>';
}
?>