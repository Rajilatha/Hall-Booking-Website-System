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
		
        $CustomerID = $_SESSION['CustomerID'];
		

		
		
		$query=mysqli_query($con,("SELECT * FROM cart WHERE CustomerID='".$CustomerID."' AND meal_id='".null."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $CustomerID = $_SESSION['CustomerID'];
    }  
  
    if($CustomerID== $CustomerID)  
    {  
    echo "at least add one item ";
    }  
    } else {  
   
			 header("location:./nDecoration.php");
		}
		
	

	?>
	

	