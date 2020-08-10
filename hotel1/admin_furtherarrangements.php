<?/*php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:./login.php");
}
 */?>
<!DOCTYPE html>
<html>
<head>
	<title> Online Hall Booking </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>


body{
	background-image:url("second.jpg");
	background-repeat:no-repeat;
	baackground-size:100px 50px;
	
}
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
			border-radius: 25px 25px 0px 0px;
			font-family:Brush Script MT;
			font-size:60px;
			color: white;
			padding:5px;
			line-height:0.5px;
		}
		.header{
			background-image:url("2.jpg");
			text-decoration: none;
			font-family:Georgia;
			color:red;
			font-size:25px;
			text-align:center;
			}
			.menu{
		background-color:black;
			text-decoration: none;
			font-family:Times New Roman;
			color:white;
			font-size:25px;
			text-align:center;
		}
					legend {
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.field input,textarea,select {
		
				margin-left: 150px;
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
		
		.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
}
			.button {
    background-color: #86c3e0;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}
		select{
		font-size:15px;
		background-color:DodgerBlue; 
		border-radius:5px;
		margin-left:15px;
		}
		
</style>
</head>
<body>

<div class="header col-12">
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOOKING <a href="Login.php"><image src="logout.jpg" width="10%" height="10%" align="right"></br></a></h1>
		
	</div>
	
	<nav class="navbar navbar-light" style="background-color:#16242D;">
									
										<div class="menu" style="font-family:navfont; font-color:White;">
											
												<div id="navcontent">
													<a class="navbar-brand" style="color:White;" href="Arrangement.php">Arrangement</a>
													
													<a class="navbar-brand" style="color:White;" href="customerdetails.php">Customer Details</a>
													<a class="navbar-brand" style="color:White;" href="confirmdetails.php">Confirm Details</a>
													<a class="navbar-brand" style="color:White;" href="adminview_booking_details.php">Booking Details</a>
													<a class="navbar-brand" style="color:White;"href="admin_feedback.php"> Feedback</a>
												    <a class="navbar-brand" style="color:White;"href="admin_chat.php" >Chat</a>
		</nav>
												</div>
										</div>
		</div>
		
		
</br>
		<div class = "xy col-12">
		<div class= "x col-3"></div>
		
		<div class="form col-12">
	<div  class="form col-2">
	
<br></br>	
<br>		
<a href="admin_room.php"> <button  class="button" type="submit" class="btn btn-info" style="border-radius: 10px 10px 10px 10px;">Room Facility</button></a>  </br> 
 <br></br>
 <br></br>
   <a href="admin_employee.php"><button   class="button" type="submit" class="btn btn-info" style="border-radius: 10px 10px 10px 10px;">Additional Employee Package</button></a>
   <br></br>
 <br></br>
   
	</fieldset>
	</form>
</div>
		
<div class="img col-3">
<img src="11.jpg" style="height:500px;width:1000px">
</div>
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
<h1 style="text-shadow: 3px 2px black;color:blue;,font-family:Book Antiqua,font-size:100"><sub>J</sub><sup>K</sup>Hall Booking</h1>

<p>JK is a rapidly growing booking service for event venues.</p></div>

</div>
</div>
</div>
	
		
</body>
</html>