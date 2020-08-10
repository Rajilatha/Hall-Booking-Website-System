	<?php

		include 'db.con.php';

		if($_SERVER["REQUEST_METHOD"] == "POST"){

       			 $packageno= $_POST['package_no'];

				$emType=$_POST['emTypeType'];
				

				$cost =$_POST['c'];

				
    
               $sql = "INSERT INTO employee (package_no,package,cost) VALUES('$packageno','$emType','$cost');";
				echo $sql;
			if(mysqli_query($conn,$sql)){
			header("Location: ./admin_employee.php?EmployeePackageDetails_added_success");
      echo "<script> alert('Meal Added Successfully');</script>";
               
            } 
         else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        
        header("Location: ./addemployee_details.php");
        echo "<script> alert('Error: Select a file');</script>";

    }

?>


	
