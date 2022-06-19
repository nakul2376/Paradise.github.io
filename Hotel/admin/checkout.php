
	
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['sid'];
	
	
	
	$sql ="delete from roombook where id = '$pid' ";
	$re = mysqli_query($con,$sql);
    						
    if(isset($_GET["sid"]))
		{
				
			 header("location:home.php");
		}
		