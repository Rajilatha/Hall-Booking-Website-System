<?php
$con=new mysqli("localhost","root","","jkhall");

?>
 <?php
if(isset($_POST['submit'])){
		
        
	    
			    

		
		if($CustomerID!==""&&$meal_id!==""&& $quantity!==""){
		$query=mysqli_query($con,("SELECT * FROM cart WHERE meal_id='".$Date."' AND Time='".$Time."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $Date=$row['Date'];  
    $Time=$row['Time'];  
	
    }  
  
    if($Date == $Date && $Time == $Time)  
    {  
    echo "Silver is Unavailable";
    }  
    } else {  
    echo "Silver is available";
		}
		}
		else{
			echo "All Fields Required";
		}
	}
	else{
		echo "";
	}
	

	?>