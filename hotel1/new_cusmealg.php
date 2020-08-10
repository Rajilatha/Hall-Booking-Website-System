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
$cid = $_POST["cid"];
										$sql = "SELECT * FROM `cartg` WHERE booking_id='".$cid."'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            
                             echo "<option>".$row->meal_id."</option>";
            
            
        }
        
        // Free result set
        mysqli_free_result($result);
		header("location:./pay/pricing.php?");
    } else{
        $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');  window.location='./newcus_mealg.php'; </script>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

}
?>


