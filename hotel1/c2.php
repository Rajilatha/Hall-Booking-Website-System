<?php
	include 'db.con.php';
	$sql="DELETE silver , cart  FROM  silver  INNER JOIN cart  
WHERE  silver.booking_id= cart.booking_id and  silver.booking_id =".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('services.php?mes=booking canceled','_self')</script>";

	}
	else
	{
		echo "<script>window.open('services.php','_self')</script>";
	}


?>