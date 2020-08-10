<?php
$con=new mysqli("localhost","root","","jkhall");

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}
else{
	echo "database connected";
}
$combo="<select>";
$sql="SELECT hallname From hallbooking";
if($result=$con->query($sql)){
if($result->num_rows)
{
	while($row=$result->fetch_object())
{
$combo.="<option>".$row->hallname."</option>";

}

$result->free();
}
}
$combo.="</select>";
echo $combo;

?>

	if(isset($_POST['submit'])){
		

		
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    $UID=$_POST['UID'];
			    $hallname=$_POST['hallname'];

		if($Date!==""&&$Time!==""&&$UID!==""){
		$sql="INSERT INTO booking(Date,Time,UserName,hallname) VALUES('$Date','$Time','$UID','$hallname')";

		if($con->query($sql))
		{
			echo "Data Stored";
		}
		else{
			echo "Insert Data Fail";
		}
		}
		else{
			echo "All Fields Required";
		}
	}
	else{
		echo "please Enter all the data";
	}
	
	
	
	<?php
	
	if(isset($_POST['submit'])){
		

		
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
		
		$connect =mysqli_connect("localhost","root","","hall_booking_website_system");
		$query="SELECT 'hallname' FROM 'hallbooking' WHERE 'Date'=$Date 'Time'=$Time";
		$result =mysqli_query($connect,$query);
		
		while($row=mysqli_fetch_array($result))
		{
			?>
			<tr><td><?php echo $row['hallname'];?></td></tr>
			<?php
		}
	}
	?>
			
			$hallname=$row['hallname'];
			$Time=$row['Time'];
		}
		mysqli_free_result($result);
		mysqli_close($connect);
	}
	else{
		$hallname="";
	}
	?>
			
	    
		
if(isset($_POST['submit'])){
	$Date=$_POST['Date'];
		$Time=$_POST['Time']; 
$query="SELECT 'hallname' FROM 'hallbooking' WHERE Date='$Date' Time='$Time'";		
$query_run =mysqli_query($connect,$query);
while($row= mysqli_fetch_array($query_run))
		{
			?>
			<tr><td><?php echo $row['hallname'];?></td></tr>
			<?php
		}
	}
	?>
	
	
	
		
		</body>
		</html>
	
