<?php
$connect=mysqli_connect("localhost","root","","hotel restautrant_db");
if(mysqli_query($connect,"delete from Category where CATEGORY_ID='".$_GET['id']."'"))
{
	echo'
    <script>
    
    alert("Category Deleted");
    window.location.href="add_cat.php";
    </script>';
}
else
{
	echo'
    <script>
    alert("Category Deleted");
    window.location.href="add_cat.php";
    </script>';
}
?>