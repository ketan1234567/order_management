<?php
$connect=mysqli_connect("localhost","root","","hotel restautrant_db");
if(mysqli_query($connect,"delete from  subcategorytbl where Subcategory_id='".$_GET['id']."'"))
{
	echo'
    <script>
    
    alert("Subategory Deleted");
    window.location.href="add_sub.php";
    </script>';
}
else
{
	echo'
    <script>
    alert("Subcategory Deleted");
    window.location.href="add_sub.php";
    </script>';
}
?>