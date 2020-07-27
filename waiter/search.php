<?php
$con= mysqli_connect("localhost","root","","hotel restautrant_db");
if (isset($_POST["query"]))
 {
	$output='';      
	$query="SELECT * FROM SUBCATEGORYTBL 	 WHERE NAME LIKE '%".$_POST["query"]."%'";
	 $result=mysqli_query($con,$query);
	$output='<ul class="list-unstyled">';
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_array($result)) {

			$output .='<li>'.$row["name"].'</li>';

		}
		# code...
	}
	else{
		$output .='<li> country not found</li>';
	}
	$output .='</ul>';
	echo $output;

}
?>