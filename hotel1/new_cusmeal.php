<?php 
session_start();
//var_dump($_SESSION['CustomerId']);exit();
if(!isset($_SESSION['CustomerID'])){
  header("location:./login.php");
}
?>
<?php
$con=new mysqli("localhost","root","","jkhall");

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}



?>




<?php
if(isset($_POST['submit'])){
$CustomerID = $_SESSION['cid'];
										$sql = "SELECT * FROM `cartp` WHERE CustomerID='".$cid."'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            
                             
            
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
		header("location:./pay/pricing.php?");
    } else{
        echo "must select one item";
		echo"<form action='newcus_meal.php'>";
echo "<br>";
echo "<br>";
echo "<br>";
      echo "<input type='submit' value='Back to Meal Booking ' name='submit'>";
   
echo "</form>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

}
?>


