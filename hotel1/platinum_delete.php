
		
<?php
session_start();
	include ('db.con.php');
	
	
	$sql="DELETE from platinum where CustomerID=".$_SESSION['CustomerID'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('home_cus.php?mes=Order Sucessfully Cancel','_self')</script>";

	}
	else
	{
		echo "<script>window.open('platinumc.php','_self')</script>";
	}
include ('db.con.php');
				$sql2 = "SELECT phone from customer where CustomerID=".$_SESSION['CustomerID'].";";

				$result = $conn->query($sql2);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						$rd = $row['phone'];
						include "./NexmoMessage.php";
$nexmo_sms = new NexmoMessage('fdb5b2b4', 'Zcxxgs3Qnhr2ZIaG');
						// Step 2: Use sendText( $to, $from, $message ) method to send a message.
						$info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Booking is canceled");
						// Step 3: Display an overview of the message
						echo $nexmo_sms->displayOverview($info);
					}
				}

?>