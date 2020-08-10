
<html>
<body>
	
	

													 <form action="home.php" method="post">
    <label for="Date">Date</label>
	<input type="date" name="Date" ><br>
      <select name="Time">
    <option value="morning">Morning</option>
    <option value="evening">Evening</option>
	</select>
	  <input type="submit" name="submit" value="OK">
  </form>
  
  

  <?php
   $connect =mysqli_connect("localhost","root","","jkhall");
   
   if(isset($_POST['submit'])){
	$Date=$_POST['Date'];
		$Time=$_POST['Time']; 
$sql="SELECT `hallname` FROM `hallbooking` WHERE hallname!=(SELECT `hallname` FROM `hallbooking` WHERE Date='$Date' && Time='$Time')";

if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>hallname</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['hallname'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
}}
	else{
		echo"no connect";
} 


?>
</body>
</html>