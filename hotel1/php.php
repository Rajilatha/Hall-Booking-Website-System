<?php
$conn=new mysqli("localhost","root","","myDB");

if($conn-> connect_errno)
{
	echo $conn->connect_error;
	die();
}
else{
	echo "database connected";
}


?>