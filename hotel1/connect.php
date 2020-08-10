
<?php

 session_start();
 

include('db.con.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
$booking_id = $_POST['booking_id'];
  $Meals = $_POST['meal'];
$eType = $_POST['eType'];
  $Rooms = $_POST['room'];  
  
  
$id=$_SESSION["CustomerID"];

echo$id;
  	$sql = "INSERT INTO confirm (CustomerID,Meals, EPackage, Rooms,Booking_Id) 
  			  VALUES('$id',$Meals', '$eType', '$Rooms','$booking_id')";
  	$result=$conn->query($sql);
  	
  header('location: home_cus.php');
  
if ($conn->query($sql)) {
include ('db.con.php');
				$sql2 = "SELECT phone from customer where CustomerID='$id'";

				$result = $conn->query($sql2);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						$rd = $row['phone'];
						include "./NexmoMessage.php";
						/**
						 * To send a text message.
						 *
						 */
						// Step 1: Declare new NexmoMessage.

						$nexmo_sms = new NexmoMessage('fdb5b2b4', 'Zcxxgs3Qnhr2ZIaG');
						// Step 2: Use sendText( $to, $from, $message ) method to send a message.
						$info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Order is conformed");
						// Step 3: Display an overview of the message
						echo $nexmo_sms->displayOverview($info);

					}
				}
}
}



?>


