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
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	

       			
				 $id=$_SESSION['CustomerID'];
				 $decid=filter_input(INPUT_POST,'decid');
		
		$room_no=filter_input(INPUT_POST,'room_no');
		$package_id=filter_input(INPUT_POST,'package_id');
echo$id;

	  
                
               $sql="INSERT INTO `optional`(`CustomerID`, `decoration_id`,`room_no`,`package_id`) VALUES ('$id','$decid','$room_no','$package_id')";
				echo $sql;
			mysqli_query($con,$sql);
			header("Location: ./pay/pricing.php?");
      echo "<script> alert('Picture Added Successfully');</script>";
               
            } 
        
    else{
        
        header("Location: ./nDecoration.php");
        echo "<script> alert('Error: Select a file');</script>";

    
}
        

		
?>