<?php 
session_start();
//var_dump($_SESSION['CustomerId']);exit();
if(!isset($_SESSION['CustomerID'])){
  header("location:./login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Online Hall Booking  </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

<style>
 {
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
		
				
					legend {
				color:white;
				font-size: 18px;
				font-weight:bold;
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
			.field input,textarea,select {
		
				margin-left: 150px;
			}

/* Style all input fields */
input[type=text],input[type=date],input[type=number],input[type=email],input[type=password],input[type=submit],input[type=reset],input[type=tel],input[type=textarea] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		
		.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the reset button */
input[type=reset] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
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
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOKKING<?php  if (isset($_SESSION['CustomerID'])) {
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
													<a class="navbar-brand" style="color:White;" href="services.php">Services</a>


													<div class="dropdown">
													<button class="dropbtn" style=" font-family:Times New Roman;">Arrangements</button>
													<div class="dropdown-content">
													<a href="cus_meal.php">Meal</a>
													<a href="Decoration.php">Decoration</a>
													<a href="packages.php">Employee packages</a>
													<a href="cus_room.php">Additional Rooms</a>
														<a href="other.php">Other Arrangements</a>
														</div>
														</div>
													<a class="navbar-brand" style="color:White;" href="aboutus_cus.php">About Us</a>

												    <a class="navbar-brand" href="contact_cus.php" style="color:White;">Contact</a>
													<a class="navbar-brand" style="color:White;" href="Feedback.php">Feedback</a>
													<br>
													 
    

		</nav>
											
										</div>
										</div>		
									
		</div>
		
		
</br>
		<div class = "xy col-12">
		<div class= "x col-3"></div>
		<?php
		$id=$_SESSION['CustomerID'];
$errors= array();
$mysqli=new mysqli('localhost','root','','jkhall') or die(mysqli_error($mysqli));
		
$sql="SELECT * FROM cart where booking_id=".$_GET['id'].";";
$sqldata=mysqli_query($mysqli,$sql)or die('error getting');
$row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$meal_id=$row['meal_id'];
?>
<div class="container col-6">
  <form action="connect.php" method="post">

  <image src ="images/default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" width="30%" height="30%" class="center"></br>
  
  </br>
  <label for="meals">Booking ID</label>
   <?php echo" <input type='textarea' id='meals' name='booking_id' value=".$_GET['id']."; required>";?>
  <label for="meals">Final Meals</label>
   <input type="textarea" name="meal_id" value= <?php echo $row['meal_id'];?> required >
	
	

<select class="w3-select w3-border" name="eType" data-validation="required" data-validation-error-msg="Please Select a Type" id="eType">
														<option value=""  selected>Package</option>
														<option value="3-7 employees">3-7 employees</option>
														<option value="8-12 employees">8-12 employees</option>
														<option value="12-16 employees">12-16 employees</option>
														<option value=" no employees">No need Employees</option>
														
													  </select>
	<br>
  
  <label for="rooms">Rooms</label><br>
	<input type="radio" id="room" name="room" value="r1" required>Room No1<br>
    <input type="radio" id="room" name="room" value="r2" required>Room No2<br>
	<input type="radio" id="room" name="room" value="r3" required>Room No3<br>
	<input type="radio" id="room" name="room" value="nor" required>No need Rooms<br>
	<br><br>
	
  <input type="submit" value="Submit">
  
	
   
	
	
  </form>


</div>




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