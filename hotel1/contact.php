<?/*php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:./login.php");
}
 */?>


<!DOCTYPE html>
<html>
<head>
	
	<title> Contact </title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
  width: 80%;
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
.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
}

.navbar-brand{
      padding:20px;

}

    .navcontent {
        font-family:navfont;

    }
    .navbar-login {
      color: #319E82;
      font-size:20px;
    }
	img {
  border-radius: 50%;
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
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOOKING <a href="Login.php"><image src="l.jpg" width="10%" height="10%" align="right"><br></a></h1>
	


	
		
		</div>
		
		<nav class="navbar navbar-light" style="background-color:#16242D;">
									
										<div class="menu" style="font-family:navfont; font-color:White;">
											
												<div id="navcontent">
												<br>
													<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
													
													<a class="navbar-brand" style="color:White;" href="halldetails.php">Hall Details</a>
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
													<a class="navbar-brand" style="color:White;" href="feedback.php">Feedback</a>
													<br>
													 
    

		</nav>
											
										</div>
										</div>
										<br>
										<br>
										<br>
										
									
										<br>
										<div class = "xy col-12">
		<div class= "x col-3"></div>
		
		<div class="col-12">
	<div  class="form col-4">
	
<div  class="form col-8">
		<ul>
			<li><h2>BOOK OUR JK HALL </h2></br></li>
				<address style="font-size:40px;color:blue;" >
				No-222/9,</br> KKS Road,</br> Jaffna.</br>
				</address>
			<li><h2>Contact Number</h2></li>
				<p style="font-size:40px;color:blue;">0214901810</p>
				
			<li><h2>E-mail</h2></li>
				<p style="font-size:40px;color:blue;">jkonlinebooking@gmail.com</p>
			<li><h2>Fax</h2></li>
				<p style="font-size:40px;color:blue;">0214901810</p>
		

</div>
</div>
<div class="img col-6">
<img src="Birthday-party-Halls-in-Mumbai_1.jpg" style="height:600px;width:800px">
</div>
</div>
</div>
		
	
	<div class="footer col-12">
	
	<div class="wrapper">
	<h3>Contact Us</h3>
	<div calss="Media">
	
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