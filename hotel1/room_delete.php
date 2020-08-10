
		
<?php
	include ('db.con.php');
	$sql="DELETE from rooms where room_no=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_room.php?mes=Room_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('admin_room.php','_self')</script>";
	}


?>