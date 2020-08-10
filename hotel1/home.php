<!DOCTYPE html>
<html>
<head>
	
	<title> Online hall booking </title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link target="_blank" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="nofollow noopener" rel="stylesheet" type="text/css"/> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script> 

$(document).ready(function() {

// get the current date

var date = new Date();

var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();


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
      padding:10px;

}

    .navcontent {
        font-family:navfont;

    }
    .navbar-login {
      color: #319E82;
      font-size:20px;
    }
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
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
  color:  #000033;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}


	.mySlides {display:none;}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
.form{
	
    width:100%
	  align:center;
	  padding:10px 100px 10px 100px;
		}
}
	input{border:1px solid #D6D6D6;background:url(DatePicker.gif) no-repeat right 3px; padding:2px;width:150px;margin:10px;float:right;}
	input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
}


div.dateTypes{margin:0 auto;width:600px;}
.search{
border-radius: 5px;
  font-size:22px;
  padding: 20px;
  background-image: url('sb.jpg')  ;
 
  font-weight:bold;
  color:black;
}	
input[type=submit] {
  background-color: #ff4d4d;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  radius:5px;
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
  background-color: #f1f1f1;
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

.dropdown-content a:hover {background-color: #ff4d4d;}

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
													<a class="navbar-brand" style="color:White;" href="Feedback.php">Feedback</a>
													<br>
													 
    

		</nav>
											
										</div>
										</div>
	
	<div class="slideshow-container">

<div class="mySlides fade">
<img src="15.jpg" style="width:1000px;height:400px">
<div class="text"><a style="color:black;" href="silver.php" >Silver</a></div>
</div>

<div class="mySlides fade">
  <img src="2.jpg" style="width:1000px;height:400px">
  <div class="text"><a style="color:black;" href="platinum.php">Platinum</a></div>
</div>

<div class="mySlides fade">
  <img src="11.jpg" style="width:1000px;height:400px">
  <div class="text"><a style="color:black;" href="gold.php">Gold<a></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

		<!--<div class="search">
<div class="col-3" style="float:left;">
										<label for="Date" >Date</label><br>
										
	<center><a target="_blank" href="http://articles.tutorboy.com/javascript/jquery-ui-datepicker-disable-specified-dates.html" rel="nofollow noopener"></a> 

<div class="dateTypes"> 

<input type="Text" id="datepicker2"   name="Date" style="float:left;" value=""/> 

</div> 
</div> 
<div class="col-3">
<label for="text" style="float:center;">Time</label><br>
      <select name="Time" style="width:150px;">
    <option value="morning">Morning</option>
    <option value="evening">Evening</option>
	</select>
	</div>
	<div class="col-3">
	  <input type="submit" name="submit" value="Search">
	  </div>
  </form>
  
  <table>
  <tr>
  <th>Booked halls</th>
  <tr><br>

  <?php
   $connect =mysqli_connect("localhost","root","","jkhall");
   
   if(isset($_POST['submit'])){
	$Date=$_POST['Date'];
		$Time=$_POST['Time']; 
$query="SELECT `hallname` FROM `booking` WHERE Date='$Date' && Time='$Time'";
$query_run =mysqli_query($connect,$query);



while($row= mysqli_fetch_array($query_run))
		{
			?>
			<tr><td> <a href="<?php echo $row['hallname'];?>"><?php echo $row['hallname'];?></a></td></tr>
			<?php
		}
		 
    }
 
 ?>
 
			
	
	
	</table>
	</div>-->
	
        
<pre style="text-align:center; font-family:Berlin Sans FB Demi; color:#b30000; font-size:20px"><b>Looking for a JK?<br>
Find a place fast & easy</b>

Whether you're organizing a corporate event or a private party, 
JK has a wide selection of amazing event spaces with pictures and all the information you need. 
Use the search function to find the perfect place for you.
In addition to regular settings, we have many unconventional venues to make your day truly unique!
<br>
The hall will be made available only 30 minutes before the booking time and should be vacated within 10 minutes from the end time of the booking
Morning 7.00am-3.00pm
Evening 6.00pm-11.00pm
Whole 7.00am-11.00pm
<br>
Booking can be cancelled before 2 weeks on that particular celebration date. Otherwise should pay the full amount for the booking.<br>
Outside meals are not allowed for the function.
For cancellation:Go to hall details and select your booked hall then cancel.
</pre>
	
	
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