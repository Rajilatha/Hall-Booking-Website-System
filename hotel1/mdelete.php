<?php
	include 'db.con.php';
	$sql="DELETE FROM cart WHERE booking_id =".$_GET['meal'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('newcus_meal.php?mes=booking canceled','_self')</script>";

	}
	else
	{
		echo "<script>window.open('newcus_meal.php','_self')</script>";
	}


?>