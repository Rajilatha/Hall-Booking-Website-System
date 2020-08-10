
<!doctype html>
	<html lang="en">
		<head>
			<title> Online hall booking</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
			<!--home CSS-->
				<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />
				
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

 
 	window.location.replace("employee_delete.php?id="+y);

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
	
		
		
					
  
  
.footer {
  background-color: black;
  padding: 10px;
  text-align: left;
  color: white;
  
}










	
	

						@font-face {
    font-family: navfont;
    src: url(fonts/BreeSerif-Regular.otf);
    
}
@font-face {
    font-family:domine;
    src: url(fonts/Domine-Regular.ttf);
}
		#footer div {
				background-color: #66d9ff;
				width: 40%;
				border-radius: 5px;
			}
				</style>
		</head>
 
		<!--Content-->
		<body>





			<img src="17.jpg" style="width:1370px;" alt="background-image">

			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->

		  <!-- Navbar content -->
		  
			   <div class="navbar-left" style="font-family:navfont; font-color:White;">
			  
					
			 <div id="navcontent">


						<a class="navbar-brand" style="color:White;" href="arrangement.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrangement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          
                          <a class="navbar-brand" style="color:White;" href="customerdetails.php">Customer Details			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						  <a class="navbar-brand" style="color:White;" href="confirmdetails.php">Confirm Details			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<a class="navbar-brand" style="color:White;"href="adminview_booking_details.php" >Booking Details					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          <a class="navbar-brand" style="color:White;"href="admin_feedback.php"> Feedback						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          <a class="navbar-brand" style="color:White;"href="admin_chat.php" >Chat	</a>
						  <a class="navbar-brand" style="color:White;"href="login.php" >logout					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>


                          
						
						
					</div>

				</div>


				
				
		</nav>

					


			

<!--
			


									
				<div class="row" >											
				<!--searching bar-->
					<div class="col-sm-6">
						<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<div class="col-sm-4" >
									<input style="border-color:grey;" class="form-control"  name="keyname" type="text" placeholder="Keyword">
									
								</div>
								<div class="col-sm-2">
									<input style="padding-top:5px;" class="btn btn-dark" type="submit" value="Search" name="submit">
									
								</div>
								


							</form>
						
					</div>										
					<div class="col-sm-6" style="padding-right:33px;">
						<button style="float:right;" class="btn btn-dark"type="button" onClick= "window.location.href ='addemployee_details.php';" ><i class=></i>Add Additional Employee Details</button>
					</div>
												
					</div>


											
					<div id="result">
						


					</div>										
					<!--end search bar-->																	
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Package No</th>
										<th>Package</th>
										<th>Cost</th>
										
										<th></th>		
									</tr>

											  <?php 
											if(isset($_POST["submit"])) {

												include 'db.con.php';

												$sql = "SELECT * FROM employee WHERE package_no LIKE '%{$_POST["keyname"]}%' OR package LIKE '%{$_POST["keyname"]}%' OR cost LIKE '%{$_POST["keyname"]}%'"; 

											$result = $conn -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['package_no'];  echo "</td>";
														  echo "<td>"; echo $row['package'];  echo "</td>";
														  echo "<td>"; echo $row['cost'];  echo "</td>";
														  
														  echo "<td>";
														  echo "<button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;' onClick='conDelete({$row["package_no"]})'>Delete </a></button>";
														  echo "</td>";
														

														  echo "</tr>";
														}


											}


												} elseif (!isset($_POST["submit"])) {


														include './db.con.php';

												$sql = "SELECT * FROM employee";

											$result = $conn -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														 echo "<td>"; echo $row['package_no'];  echo "</td>";
														  echo "<td>"; echo $row['package'];  echo "</td>";
														  echo "<td>"; echo $row['cost'];  echo "</td>";
														  
														  echo "<td>";
														  echo "<button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;' onClick='conDelete({$row["package_no"]})'>Delete </a></button>";
														 




 



														  echo "</td>";
														

														  echo "</tr>";
														}


											}

													



												}






											
										?>
								</thead>
						</div>	
							</table>
				</div>
			</div>
		
			
		<!-- Footer -->

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

<p>JK is a rapidly growing booking service for event venues.</p>

</div>
</div>
</div>
		
	</body>
</html>