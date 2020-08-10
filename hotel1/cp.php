<?php
	include 'db.con.php';
	$sql="DELETE platinum , cartp  FROM platinum  INNER JOIN cartp  
WHERE platinum.booking_id= cartp.booking_id and platinum.booking_id =".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('services.php?mes=booking canceled','_self')</script>";

	}
	else
	{
		echo "<script>window.open('services.php','_self')</script>";
	}


?>