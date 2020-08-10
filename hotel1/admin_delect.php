
		
<?php
	include ('db.con.php');
	$sql="DELETE from meal where meal_id=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_meal.php?mes=Meal_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('admin_meal.php','_self')</script>";
	}


?>