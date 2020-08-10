
<!DOCTYPE html>
<html>
<head>
	
	<title> Booking</title>
	
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
		background-color:black;
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
      padding:80px;

}

    .navcontent {
        font-family:navfont;

    }
    .navbar-login {
      color: #319E82;
      font-size:20px;
    }
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color:  #ff9966;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ff5050;
}

.book{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

	
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
													<a class="navbar-brand" style="color:White;" href="aboutus.php">About Us</a>
													<a class="navbar-brand" style="color:White;" href="halldetails.php">Hall Details</a>
													<a class="navbar-brand" style="color:White;"href="services.php"> Services</a>
												    <a class="navbar-brand" href="contact.php" style="color:White;">Contact</a>
													<br>
													
													
		
										</nav>	
										</div>
										</div>
										
  <form action="serach.php" method="post">
    <label for="Date">Date</label>
	<input type="date" name="Date" ><br>
     <label for="Time">Time</label>
    <input type="text" id="Time" name="Time" placeholder="Your Id..">
	  <input type="submit" name="submit" value="OK">
  </form>
  <table>
  <tr>
  <th>hall name</th>
  <tr><br>

  <?php
   $connect =mysqli_connect("localhost","root","","jkhall");
   
   if(isset($_POST['submit'])){
	$Date=$_POST['Date'];
		$Time=$_POST['Time']; 
$query="SELECT DISTINCT `hallname` FROM `hallbooking` WHERE Date!='$Date' && Time!='$Time'";
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
	
			
	    
		

	
	
		
		</body>
		</html>