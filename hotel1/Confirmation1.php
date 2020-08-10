
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Hall Booking </title>
	
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
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.navbar-brand{
      padding:50px;

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
input {
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
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}


/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}
.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
}
.option{
	
	 width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
	
}
.button{
	background-color: #4CAF50;
    color: white;
	 width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
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
  color: #ff4d4d;
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
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOOKING</h1>
		
	</div>
	
	<nav class="navbar navbar-light" style="background-color:#16242D;">
									
										<div class="menu" style="font-family:navfont; font-color:White;">
											
												<div id="navcontent">
												<br>
													<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
													
													<a class="navbar-brand" style="color:White;" href="halldetails.php">Hall Details</a>
													<div class="dropdown">
													<button class="dropbtn" style=" font-family:Times New Roman;">Services</button>
														<div class="dropdown-content">
														<a href="Booking">Booking</a>
														<a href="#">Conformation</a>
														<a href="#">Cancellation</a>
															</div>
															</div>
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
													<a class="navbar-brand" style="color:White;" href="aboutus.php">About Us</a>

												    <a class="navbar-brand" href="contact.php" style="color:White;">Contact</a>
													<a class="navbar-brand" style="color:White;" href="Feedback.php">Feedback</a>
													<br>
													</nav>
											
										</div>
										</div>		
									
		</div>
		
										
	
		</br>
		<div class = "xy col-12">
		<div class= "x col-3"></div>

<div class="container col-6">
  <form action="Confirmation.php" method="post">

  <image src ="images/default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" width="30%" height="30%" class="center"></br>
  
  </br>
  <label for="customer_id">Customer_Id</label>
    <input type="text" id="customer_id" name="customer_id" required>
	
	 <label for="hallname">HallName</label>
    <input type="text" id="hallname" name="hallname" required>
	
	 <label for="functiondate">FunctionDate</label>
    <input type="date" id="functiondate" name="functiondate" required>
	
	<label for="gender">FunctionTime</label>
	<input type="radio" id="functiontime" name="functiontime" value="M" required>Morning
    <input type="radio" id="functiontime" name="functiontime" value="E" required>Evening
	<br><br>
	
	 <label for="mealiteam">MealIteam</label>
    <input type="text" id="mealiteam" name="mealiteam" required>
	
	<label for="decorationtheam">DecorationTheam</label>
    <input type="text" id="decorationtheam" name="decorationtheam" required>
	
    <input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Cancel">
	
  </form>


</div>


	<div class="contact col-12">
		<div class="img col-3">
		<img src="images/th.jpg" width="70%" height="150px">
		</div>
		<div class="address col-3">
		<p style="align:center"><address >JK Hall</br> Inuvil south,</br> Jaffna,</br> Sri Lanka.</address></p><br/>
		</div>
		<div class="phone col-3">
		<p> &#9742 +940212228745</p>
		<p> &#9742 +940212228907</p>
		</div>
		<div class="time col-3">
		<p style="font-family:Agency FB";>7 Days</p>
		<p style="font-family:Agency FB";>6.30am to 3.30pm</p>
		<p style="font-family:Agency FB";>6.00pm to 11.00pm</p>
		</div>
		
	</div>
	
</body>
</html>