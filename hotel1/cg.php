<?php
	include 'db.con.php';
	$sql="DELETE gold , cartg  FROM gold  INNER JOIN cartg  
WHERE gold.booking_id= cartg.booking_id and gold.booking_id =".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('services.php?mes=booking canceled','_self')</script>";

	}
	else
	{
		echo "<script>window.open('services.php','_self')</script>";
	}


?>