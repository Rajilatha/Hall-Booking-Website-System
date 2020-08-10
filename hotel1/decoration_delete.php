
		
<?php
	include 'db.con.php';
	$sql="DELETE from decoration where decoration_id=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_decoration.php?mes=Decoration_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('admin_decoration.php','_self')</script>";
	}


?>