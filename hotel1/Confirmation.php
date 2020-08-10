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

  <!--java script-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script type="text/javascript">
function conDelete(y)
{


 var x = confirm("Are you sure you want to delete?");
 if(x) {

 
 	window.location.replace("c2.php?id="+y);

 }

}
function Delete(y)
{


 var x = confirm("Are you sure you want to delete?");
 if(x) {

 
 	window.location.replace("cg.php?id="+y);

 }

}
function Del(y)
{


 var x = confirm("Are you sure you want to delete?");
 if(x) {

 
 	window.location.replace("cp.php?id="+y);

 }

}

function update(y)
{


 var x = confirm("Are you sure you want to confirm?");
 if(x) {

 
 	window.location.replace("Confirmation2.php?id="+y);

 }

}
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
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff6666;
  color: white;
}
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
													<a class="navbar-brand" style="color:White;" href="Confirmation.php">Confirmation</a>

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
										</br>
										</br>
										<h1>Silver</h1>
																	<table>
								<thead id="customers">
									<tr>
										<th>Booking ID</th>
										
										<th>Date</th>
										<th>Time</th>
										<th>People</th>
										
										<th></th>
										<th></th>
									</tr>
<?php

										$sql = "select * from silver where `Date`>CURRENT_DATE()+14";
                                  $result = $con -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;
            echo "<tr>";
                echo "<td>" . $row['booking_id'] . "</td>";
                
                
				echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
				echo "<td>" . $row['people'] . "</td>";
				echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='conDelete({$row["booking_id"]})'>Cancel </a></button>";

						echo "</td>";
                echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='update({$row["booking_id"]})'>Confirm </a></button>";

						echo "</td>";						
            echo "</tr>";
        }
        echo "</table>";
											}

?>
<h1>Platinum</h1>
<table>
								<thead id="customers">
									<tr>
										<th>Booking ID</th>
										
										<th>Date</th>
										<th>Time</th>
										<th>People</th>
										
										<th></th>		
									</tr>
<?php
$sql = "select * from platinum where `Date`>CURRENT_DATE()+14";
                                  $result = $con -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;
            echo "<tr>";
                echo "<td>" . $row['booking_id'] . "</td>";
                
                
				echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
				echo "<td>" . $row['people'] . "</td>";
				echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='Del({$row["booking_id"]})'>Cancel </a></button>";

						echo "</td>";	
 echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='update({$row["booking_id"]})'>Confirm </a></button>";

						echo "</td>";							
            echo "</tr>";
        }
        echo "</table>";
											}

?>
<h1>Gold</h1>
<table>
								<thead id="customers">
									<tr>
										<th>Booking ID</th>
										
										<th>Date</th>
										<th>Time</th>
										<th>People</th>
										
										<th></th>		
									</tr>

<?php

$sql = "select * from gold where `Date`>CURRENT_DATE()+14";
                                  $result = $con -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;
            echo "<tr>";
                echo "<td>" . $row['booking_id'] . "</td>";
                
                
				echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
				echo "<td>" . $row['people'] . "</td>";
				echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='Delete({$row["booking_id"]})'>Cancel </a></button>";

						echo "</td>";	
 echo "<td>";
				echo "<button type='button' class='btn btn-danger'> <a style='color:black;text-decoration:none;' onClick='update({$row["booking_id"]})'>Confirm </a></button>";

						echo "</td>";							
            echo "</tr>";
        }
        echo "</table>";
											}

?>



										
</body>
</html> 