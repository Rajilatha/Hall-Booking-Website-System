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
	
	<title> Hall Details </title>
	
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
      padding:30px;

}

    .navcontent {
        font-family:navfont;

    }
    .navbar-login {
      color: #319E82;
      font-size:20px;
    }

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width:220;
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
		
input{border:1px solid #D6D6D6;background:url(DatePicker.gif) no-repeat right 3px; padding:2px;width:150px;margin:10px;float:left;}

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
													<a class="navbar-brand" style="color:White;" href="feedback.php">Feedback</a>
													<br>
													 
    

		</nav>
											
										</div>
										</div>
										<br>
		
		</br>
		
										<br>
										 <p style="color:DodgerBlue;">search available halls</p>
					<div class="search">
					<form action="halldetails_cus.php" method="post">
<div class="col-3" style="float:left;">
										<label for="Date" >Date</label><br>
										
	<center><a target="_blank" href="http://articles.tutorboy.com/javascript/jquery-ui-datepicker-disable-specified-dates.html" rel="nofollow noopener"></a> 

<div class="dateTypes"> 

<input type="Text" id="datepicker2"   name="Date" style="float:left;" value="" autocomplete="off"/> 

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

  <tr><br>

  <?php
$con=new mysqli("localhost","root","","jkhall");

?>
 <?php
if(isset($_POST['submit'])){
		
        
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    
			    

		
		if($Date!==""&&$Time!==""){
		$query=mysqli_query($con,("SELECT * FROM silver WHERE Date='".$Date."' AND Time='".$Time."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $Date=$row['Date'];  
    $Time=$row['Time'];  
	
    }  
  
    if($Date == $Date && $Time == $Time)  
    {  
    echo "";
    }  
    } else {  
    echo "<a href ='silverc.php'>Silver</a>";
		}
		}
		else{
			echo "All Fields Required";
		}
	}
	else{
		echo "";
	}
	

	?>
	<br>
	
	<?php
if(isset($_POST['submit'])){
		
        
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    
			    

		
		if($Date!==""&&$Time!==""){
		$query=mysqli_query($con,("SELECT * FROM gold WHERE Date='".$Date."' AND Time='".$Time."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $Date=$row['Date'];  
    $Time=$row['Time'];  
	
    }  
  
    if($Date == $Date && $Time == $Time)  
    {  
    echo "";
    }  
    } else {  
    echo "<a href ='goldc.php'>Gold</a>";
		}
		}
		else{
			echo "";
		}
	}
	else{
		echo "";
	}
	

	?>
	<br>
	
	<?php
if(isset($_POST['submit'])){
		
        
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
	    
			    

		
		if($Date!==""&&$Time!==""){
		$query=mysqli_query($con,("SELECT * FROM platinum WHERE Date='".$Date."' AND Time='".$Time."'"));  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    
    $Date=$row['Date'];  
    $Time=$row['Time'];  
	
    }  
  
    if($Date == $Date && $Time == $Time)  
    {  
    echo "";
    }  
    } else {  
    echo "<a href ='platinumc.php'>Platinum</a>";;
		}
		}
		else{
			echo "";
		}
	}
	else{
		echo "";
	}
	

	?>
	
	
	</table>
		</div>										
			<br>
<br>			
										
										<div class="gallery col-4">
  <a href="silverc.php">
    <img src="15.jpg" alt="Silver" width="600" height="400">
  </a>
  <div class="desc">Silver</div>
</div>

<div class="gallery col-3">
  <a href="platinumc.php">
    <img src="2.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Platinum</div>
</div>

<div class="gallery col-3">
  <a href="goldc.php">
    <img src="11.jpg" alt="gold" width="600" height="400">
  </a>
  <div class="desc">Gold</div>
</div></div>	
<br>
<br>
			
		
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