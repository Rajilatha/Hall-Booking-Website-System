<?php 
session_start();
//var_dump($_SESSION['CustomerId']);exit();
if(!isset($_SESSION['CustomerID'])){
  header("location:./login.php");
}
?>
<?php
$con=new mysqli("localhost","root","","jkhall");

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}



?>
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
	
	#customers {

  font-family: Verdana;
  border-collapse: collapse;
  width: 50%;
  height:55%;
  margin-left:15%; 
    margin-right:15%;
	margin-bottom:5%;
	font-weight:bold;
	font-size:25px;
	color:black;
}

#customers th,td, #customers {
  border: 2px solid black;
  padding: 10px;
}
#customers th{
	background-color:#ff4d4d;

}



#customers tr:hover {background-color:  #ff6666;}

* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}



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
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.button {
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
<body >
<div class="header col-12">
	<h1 style="font-family:Papyrus">JK ONLINE HALL BOOKING <?php  if (isset($_SESSION['CustomerID'])) {
                             $row= $_SESSION['fname'];}  ?>
                              <img src="Images/user.png" style="padding-top:5px;margin-left:150px;">
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;margin-left:150px;"><?php echo $row; ?></a></option>
                          <option value="logout.php"> <a class="navbar-brand"  style="color:Red;margin-left:150px;">logout</a></option>
                          </select></h1>
		
		</div>
	
    
       
  <div>
         
  

      
      
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
													 
    

		
											
										</div>
										</div>
										</nav>
										</div>
										<br>
										<br>
		

    
            <br>
			<div>
			<h3>Order Details</h3>
			<div class="table-responsive">
			<form action="cart.php" method="POST">
				<table class="table table-bordered">	
				<tr>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
           <?php
		   $cid = $_POST['cid'];
		   
		   if(isset($_GET["del"]))
				{
					foreach($_SESSION["shopping_cart"] as $keys=>$values)
					{
							if($values["item_id"]==$_GET["del"])
							{
								unset($_SESSION["shopping_cart"][$keys]);
							}
					}
				}


       if(!empty($_SESSION["shopping_cart"]))
	   {
		   $total=0;
		   foreach($_SESSION["shopping_cart"] as $keys => $values)
		   {
			  $amt=$values["item_quantity"]*$values["item_price"];
			  $total+=$amt;
			  
			  
			   echo"
			   <tr>
			   <td>{$values["item_name"]}</td>
			   <td>{$values["item_quantity"]}</td>
			   <td>{$values["item_price"]}</td>
			   <td>{$amt}</td>
			   <td><form action='cart.php?del={$values["item_id"]}' method='post' id='id'>


<input type='hidden' name='cid' value=$cid class='form-control' />
<input type='submit' value='Remove' name='submit'>



</form>	
</td>
			   ";
		   }
		   echo "
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>Total</td>
												<td>{$total}</td>
											</tr>";							
							
					}
	   
			   
		   ?>
		   </table>
		  
		   </div>
		   </div>
		   </form>
		   
		   <?php
echo "<form action='newcus_meal.php' method='post' id='id'>";
$cid = $_POST['cid'];

echo "<input type='hidden' name='cid' value=$cid class='form-control' />";
echo" <input type='submit' value='AddItem' name='submit'>";
echo "</form>";	
?>

            <br><br><br><br><br><br><br><br><br><br>
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
