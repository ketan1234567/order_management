<?php
$connect=mysqli_connect("localhost","root","","hotel restautrant_db");
if(mysqli_query($connect,"delete from waiter_info where waiter_id='".$_GET['id']."'"))
{
	echo'
    <script>
    
    alert("waiter Deleted");
    window.location.href="add_waiter.php";
    </script>';
}
else
{
	echo'
    <script>
    alert("try again");
    window.location.href="add_waiter.php";
    </script>';
}
?>