<!DOCTYPE html>
<html>
<head>
</body>	
<form action="check1.php">
			<input type="date" name="Date" ><br>
     <input type="option" id="Time" name="Time" >
			<select>
  <option value="Morning">Morning</option>
  <option value="Evening">Evening</option>
  </select>
  <input type="submit" name="submit" value="OK">
  </form>
  <table>
  <tr>
  <th>hall name</th>
  <tr><br>
   <?php
   $connect =mysqli_connect("localhost","root","","hall_booking_website_system");
   
   if(isset($_POST['submit'])){
	$Date=$_POST['Date'];
		$Time=$_POST['Time']; 
$query="SELECT `hallname` FROM `hallbooking` WHERE Date!='$Date' && Time!='Time'";
$query_run =mysqli_query($connect,$query);
while($row= mysqli_fetch_array($query_run))
		{
			?>
			<tr><td style="color=white;"> <a href="<?php echo $row['hallname'];?>"><?php echo $row['hallname'];?></a></td></tr>
			<?php
		}
	}
	?>
</table>
</body>
</html>