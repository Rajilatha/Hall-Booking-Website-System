	<?php

		include 'db.con.php';

		if($_SERVER["REQUEST_METHOD"] == "POST"){

   
    	if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

       			 $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
       			 $filename = $_FILES["photo"]["name"];
       			 $filetype = $_FILES["photo"]["type"];
       			 $filesize = $_FILES["photo"]["size"];
       			 $mealid = $_POST['meal_id'];

				$mealname = $_POST['meal_name'];

				$mealdescription = $_POST['meal_description'];

				$price =$_POST['price'];

				$eType = $_POST['eType'];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../Images/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../Images/" . $filename);
                
               $sql = "INSERT INTO meal (meal_id, meal_name,meal_description,meal_type,price,image_link) VALUES('$mealid','$mealname','$mealdescription','$eType','$price','$filename')";
				echo $sql;
			mysqli_query($conn,$sql);
			header("Location: ./admin_meal.php?meal_added_success");
      echo "<script> alert('Meal Added Successfully');</script>";
               
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        
        header("Location: ./addnew_meal.php");
        echo "<script> alert('Error: Select a file');</script>";

    }
}

?>
	
