
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['pid'];
	
	
	
	$sql ="delete  from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
							
    if(isset($_GET["pid"]))
		{
				
			 header("location:payment.php");
		}
		
				
	?>