<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    $Date=$_POST['Date'];
		$Time=$_POST['Time'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","jkhall");
    
    // mysql search query
    $query ="SELECT `hallname` FROM `hallbooking` WHERE hallname!=(SELECT `hallname` FROM `hallbooking` WHERE Date='$Date' && Time='$Time')";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $hallname = $row['hallname'];
        
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $hallname = "";
           
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $hallname = "";
    
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP FIND DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <form action="phps.php" method="post">

       <label for="Date">Date</label>
	<input type="date" name="Date" ><br>
      <select name="Time">
    <option value="morning">Morning</option>
    <option value="evening">Evening</option>
	</select>

        hall Name:<input type="text" name="hallname" value="<?php echo $hallname;?>"><br>
		<input type="text" name="hallname" value="<?php echo $hallname;?>"><br>
		<input type="text" name="hallname" value="<?php echo $hallname;?>"><br>
<br>

       

        <input type="submit" name="search" value="Find">

    </body>

</html>