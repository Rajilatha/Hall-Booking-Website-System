<?php
$conn=new mysqli("localhost","root","","jkhall");

if($conn-> connect_errno)
{
	echo $conn->connect_error;
	die();
}
else{
	echo "database connected";
}


?>
 <label for="Event">Event Name</label>
    <select id="Event" name="Event" required>
      <option value="Wedding">Wedding</option>
      <option value="Party">Party</option>
      <option value="Birthday">Birthday</option>
	  <option value="Seminar">Seminar</option>
    </select>
  <label for="no_of_people">No Of People</label>
    <input type="text" id="UID" name="UserId" required>
	<label for="date">Date</label>