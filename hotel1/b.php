<?php 
session_start();
//var_dump($_SESSION['CustomerId']);exit();
if(!isset($_SESSION['CustomerID'])){
  header("location:./login.php");
}
?>
<?php
$con=new mysqli("localhost","root","","jkhall");

?>


<?php
if(isset($_POST['submit'])){
		
        $CustomerID = $_SESSION['CustomerID'];
		$hallname=$_POST['hallname'];
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    $people=$_POST['people'];
			    

		
		if($hallname!==""&&$Date!==""&&$Time!==""&&$people!==""){
		$query=mysqli_query($con,("SELECT * FROM silver WHERE Date='".$Date."' AND Time='".$Time."'AND hallname='".$hallname."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $Date=$row['Date'];  
    $Time=$row['Time'];  
	$hallname=$row['hallname'];
    }  
  
    if($Date == $Date && $Time == $Time && $hallname == $hallname)  
    {  
    echo "hall is UnAvailable please Book other hall";
    }  
    } else {  
    if($hallname!==""&&$Date!==""&&$Time!==""&&$people!==""){
		$sql="INSERT INTO silver (CustomerID,hallname, Date, Time, people) VALUES ('$CustomerID','$hallname','$Date','$Time','$people')";

		if($con->query($sql))
		{
			echo "<h1>Successfully submitted<h1>";
			 header("location:./newcus_meal.php");
		}
		else{
			echo "";
		}  
    } 
		}
		}
		else{
			echo "All Fields Required";
		}
	}
	else{
		echo "please Enter all the data";
	}
	?>
<?php
 echo "<table>";
										$sql1 = "SELECT * FROM silver WHERE Date='".$Date."' AND Time='".$Time."'AND hallname='".$hallname."'; "
$result = mysqli_query($con, $sql1)
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['booking_id'] . "</td>";
                
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
	}

	?>
	