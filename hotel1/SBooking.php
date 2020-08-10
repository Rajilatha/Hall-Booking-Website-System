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
<!DOCTYPE html>
<html>
<head>
<title> Gold </title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link target="_blank" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="nofollow noopener" rel="stylesheet" type="text/css"/> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script> 

$(document).ready(function() {

// get the current date

var date = new Date();

var m = date.getMonth(), d = date.getDate()+14, y = date.getFullYear();


// Disable all dates till today

$('#datepicker2').datepicker({

minDate: new Date(y, m, d+1),

dateFormat: 'yy-mm-dd',

});

function enableFirday(date) {

var day = date.getDay();

return [(day == 5), ''];

}

});

</script> 
	
	<style>
		* {
			box-sizing: border-box;
		}
		
		.header::after {
			content: "";
			clear: both;
			display: table;
		}
		.bottom type::after {
			content: "";
			clear: both;
			display: table;
		}
		
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.title{
			
						height:1px;
			background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
			border-radius: 25px 25px 0px 0px;
			font-family:Brush Script MT;
			font-size:60px;
			color: white;
			padding:5px;
			line-height:0.5px;
		}
				.header{
			background-image:url("b.jpg");;
			text-decoration: none;
			font-family:Broadway;
			color:black;
			font-size:25px;
			text-align:center;
			}
		
		
		.menu{
		background-color:#ff4d4d;
			text-decoration: none;
			font-family:Times New Roman;
			color:white;
			font-size:25px;
			text-align:center;
		}
		
		form.box::after {
  content: "";
  clear: both;
  display: table;
}
form.box button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.box button:hover {
  background: #0b7dda;
}
form.box input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  
  background: #f1f1f1;
}
		
					
		
		
			.button {
    background-color:lightblue;
    border: none;
    color:Darkblue;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}



.navbar-brand{
      padding:30px;

}

    .navcontent {
        font-family:navfont;

    }
    .navbar-login {
      color: #319E82;
      font-size:20px;
    }


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  max-width:700px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
#customers {
	background-image:url("t2.jpg");;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  height:55%;
  margin-left:25%; 
    margin-right:15%;
	margin-bottom:5%;
	font-weight:bold;
	font-size:25px;
}

#customers td, #customers {
  border: 2px solid #994d00;
  padding: 8px;
}



#customers tr:hover {background-color:  #ff9900;}
input[type=text], select, textarea {
  
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
}.button {
  background-color:#ff4d4d;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  float:right;
}
.dropbtn {
  background-color: #ff4d4d;
  color: white;
  padding: 16px;
  font-size: 30px;
  border: none;
  font-family:Times New Roman;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#ff4d4d ;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ff4d4d;}





</style>
</head>
<body>
<div class="header col-12">
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOOKING <?php  if (isset($_SESSION['CustomerID'])) {
                             $row= $_SESSION['fname'];}  ?>
                              <img src="Images/user.png" style="padding-top:5px;margin-left:150px;">
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;margin-left:150px;"><?php echo $row; ?></a></option>
                          <option value="logout.php"> <a class="navbar-brand"  style="color:Red;margin-left:150px;">logout</a></option>
                          
                            </select></h1>
	
	
		
		
	
		



	
		
		</div>
		
		<nav class="navbar navbar-light" style="background-color:#16242D;">
									
										<div class="menu" style="font-family:navfont; font-color:White;">
											
												<div id="navcontent">
												<br>
													<a class="navbar-brand" style="color:White;" href="home_cus.php">Home</a>
													
													<a class="navbar-brand" style="color:White;" href="halldetails_cus.php">Hall Details</a>
													<a class="navbar-brand" style="color:White;" href="Services.php">Services</a>

													<div class="dropdown">
													<button class="dropbtn" style=" font-family:Times New Roman;">Arrangements</button>
													<div class="dropdown-content">
													<a href="com_meal.php">Meal</a>
													<a href="com_Decoration.php">Decoration</a>
													<a href="com_packages.php">Employee packages</a>
													<a href="com_room.php">Additional Rooms</a>
														<a href="com_other.php">Other Arrangements</a>
														</div>
														</div>
													<a class="navbar-brand" style="color:White;" href="aboutus.php">About Us</a>

												    <a class="navbar-brand" href="contact.php" style="color:White;">Contact</a>
													<a class="navbar-brand" style="color:White;" href="Feedback.php">Feedback</a>
													<br>
													 
    

		</nav>
											
										</div>
										</div>
										
										<h2>Hall Booking</h2>

<div class="container">
  <form action="SBooking.php" method="post">
    
    <div class="row">
      <div class="col-25">
        <label for="hallname">Hall Name</label>
      </div>
      <div class="col-75">
      <input type="text" id="hallname" name="hallname" value="Silver" required>
			
      </div>
    </div>
	
	
    <div class="row">
      <div class="col-25">
         <label for="Date">Date</label>
      </div>
      <div class="col-75">
        <center><a target="_blank" href="http://articles.tutorboy.com/javascript/jquery-ui-datepicker-disable-specified-dates.html" rel="nofollow noopener"></a> 

<div class="dateTypes"> 

<input type="Text" id="datepicker2"   name="Date" style="float:left;" value="" autocomplete="off"//> 

</div> 
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="Time">Time</label>
      </div>
      <div class="col-75">
        
			<select name="Time" required>
  <option value="Morning">Morning</option>
  <option value="Evening">Evening</option>
  </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="people">Number Of people</label>
      </div>
      <div class="col-75">
        <input type="number" id="people" name="people" max='500' placeholder="No of People.." required>
      </div>
    </div>
	<table id="customers">
            <tr>
                <th>Decoration ID</th>
                <th>Decoration Name</th>
                <th>Image</th>
				<th>Decoration_type</th>
                <th>price</th>
            </tr>
										
										<?php
										$sql = "SELECT * FROM decoration";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['decoration_id'] . "</td>";
                echo "<td>" . $row['decoration_name'] . "</td>";?>
                <td> <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:10px;" align="center">
						<img  style="width:250px;height:180px" src="./images/<?php echo $row["image_link"]; ?>" class="img-responsive" /><br /></td>";<?php
				echo "<td>" . $row['decoration_type'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 

?>


    
	<div class="row">
      <div class="col-25">
        <label for="decid">Decoration-Id</label>
      </div>
      <div class="col-75">
       <?php
	  echo "<select name='decid'>";
	 echo "<option> none</option>";
	  $sql="SELECT decoration_id FROM `decoration`";
	  if($result=$con->query($sql)){
		  if($result->num_rows){
			  while($row=$result->fetch_object())
			  {
				   
				  echo "<option>".$row->decoration_id."</option>";
			  }
			  $result->free();
		  }
	  }
	  echo "</select>";
	  
	  ?>
	  
	  
      </div>
    </div>
	
	
	
	

	
	<table id="customers">
            <tr>
                <th>Room No</th>
                <th>Room Type</th>
				<th>Room Category</th>
                <th>Cost</th>
				<th>Image</th>
            </tr>
										
										<?php
										$sql = "SELECT * FROM rooms";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['room_no'] . "</td>";
                echo "<td>" . $row['room_type'] . "</td>";
                echo "<td>" . $row['room_category'] . "</td>";
				echo "<td>" . $row['cost'] . "</td>";?>
 <td> <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:10px;" align="center">
						<img  style="width:250px;height:180px" src="./images/<?php echo $row["image_link"]; ?>" class="img-responsive" /><br /></td>";<?php
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>
 </table>
	
	<div class="row">
      <div class="col-25">
        <label for="package_id">Room No</label>
      </div>
      <div class="col-75">
	  
	  <?php
	   echo "<select name='room_no'>";
	 echo "<option> none</option>";
	  $sql="SELECT room_no FROM `rooms`";
	  if($result=$con->query($sql)){
		  if($result->num_rows){
			  while($row=$result->fetch_object())
			  {
				   
				  echo "<option>".$row->room_no."</option>";
			  }
			  $result->free();
		  }
	  }
	  echo "</select>";
	  
	  
	  
	  ?>
	  
	  
	  
	  
        
      </div>
    </div>
	
	
	<table id="customers">
            <tr>
                <th>Package No</th>
                <th>Package</th>
                <th>Cost</th>
            </tr>
										
										<?php
										$sql = "SELECT * FROM employee";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['package_no'] . "</td>";
                echo "<td>" . $row['package'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>
 </table>
 
 <div class="row">
      <div class="col-25">
        <label for="package_id">Package No</label>
      </div>
      <div class="col-75">
        
	  
	  <?php
	  echo "<select name='package_id'>";
	 echo "<option> none</option>";
	  $sql="SELECT package_no FROM `employee`";
	  if($result=$con->query($sql)){
		  if($result->num_rows){
			  while($row=$result->fetch_object())
			  {
				   
				  echo "<option>".$row->package_no."</option>";
			  }
			  $result->free();
		  }
	  }
	  echo "</select>";
	  
	  
	  
	  ?>
      </div>
    </div>
	
    <div class="row">
      <input type="submit" value="GET THE BOOKING ID" name="submit">
    </div>
  </form>
</div>
<script>
$('#numberbox').keyup(function(){
  if ($(this).val() > 500){
    alert("No numbers above 100");
    $(this).val('100');
  }
});
</script>

	<?php
if(isset($_POST['submit'])){
		
        $CustomerID = $_SESSION['CustomerID'];
		$hallname=$_POST['hallname'];
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    $people=$_POST['people'];
							 $decid=filter_input(INPUT_POST,'decid');
		
		$room_no=filter_input(INPUT_POST,'room_no');
		$package_id=filter_input(INPUT_POST,'package_id');    

		
		if($hallname!==""&&$Date!==""&&$Time!==""&&$people!==""&&$decid!==""&&$room_no!==""&&$package_id!==""){
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
    if($hallname!==""&&$Date!==""&&$Time!==""&&$people!==""&&$decid!==""&&$room_no!==""&&$package_id!==""){
		$sql="INSERT INTO silver (CustomerID,hallname, Date, Time, people,decoration_id,room_no,package_id) VALUES ('$CustomerID','$hallname','$Date','$Time','$people','$decid','$room_no','$package_id')";
		if($con->query($sql))
		{
			echo "<h1>Successfully submitted<h1>";
			
										$sql = "SELECT * FROM silver WHERE Date='".$Date."' AND Time='".$Time."'AND hallname='".$hallname."'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      
        while($row = mysqli_fetch_array($result)){
            echo "<form action='newcus_meal.php' method='post' id='id'>";
               
              
      
       
      
      
      echo "<input type='text'  name='cid' value=". $row['booking_id'] ." required>";
					echo" <input type='submit' value='NEXT' name='submit'>";
		echo "</form>";	
        
        }
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


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
	
	

<div class="footer col-12">
	
	<div class="wrapper">
	<h3>Contact Us</h3>
	<div class="Media">
	
	<div class="col-3">
	<i class="fa fa-envelope" aria-hidden="true"><a href="https://mail.google.com">jkonlinebooking@gmail.com</a></i></div>
    	<div class="col-3">
	<i class="fa fa-phone" aria-hidden="true">0214901810</i></div>
		<div class="col-3">
    <i class="fa fa-map-marker" aria-hidden="true"><a href="https://www.google.lk/maps/place/Jaffna-Kankesanturai+Rd/@9.7386927,80.0222913,17z/data=!3m1!4b1!4m5!3m4!1s0x3affab4a55b614ef:0x4b8d9f0d125176db!8m2!3d9.7386927!4d80.02448"><address>No 222/9,<br>kks road,<br> jaffna.</address></a></i></div>
<div class="col-3">
<h1 style="text-shadow: 3px 2px black;color:blue;,font-family:Book Antiqua;,font-size:100"><sub>J</sub><sup>K</sup>Hall Booking</h1>

<p>JK is a rapidly growing booking service for event venues.</p></div>

</div>
</div>
</div>
										
</body>
</html> 