<?php
include 'db.con.php';
if(isset($_POST['submit'])){

       			 $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
       			 $filename = $_FILES["file"]["name"];
       			 $filetype = $_FILES["file"]["type"];
       			 $filesize = $_FILES["file"]["size"];
	$title=$_POST['title'];
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
                
               $sql = "INSERT INTO picture (CustomerID,image_link) VALUES('$title','$filename')";
				echo $sql;
			mysqli_query($conn,$sql);
			header("Location: ./admin_chat.php?meal_added_success");
      echo "<script> alert('Meal Added Successfully');</script>";
               
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        
        header("Location: ./admin_chat.php");
        echo "<script> alert('Error: Select a file');</script>";

    }

        

		
?>