
		
<?php
	include ('db.con.php');
	$sql="DELETE from employee where package_no=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_employee.php?mes=Package_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('admin_employee.php','_self')</script>";
	}


?>