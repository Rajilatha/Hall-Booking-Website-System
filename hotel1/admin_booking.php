
<!doctype html>
	<html lang="en">
	  
		<head>
			 <title>Online Hall Booking</title>
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
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
									<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

				<style>
						@font-face {
    font-family: navfont;
    src: url(fonts/BreeSerif-Regular.otf);
    
}
@font-face {
    font-family:domine;
    src: url(fonts/Domine-Regular.ttf);
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


						<a class="navbar-brand" style="color:White;" href="arrangement.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrangement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          <a class="navbar-brand" style="color:White;" href="halldetails.php">Hall Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          <a class="navbar-brand" style="color:White;" href="contactdetails.php">Contact Details			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<a class="navbar-brand" style="color:White;"href="admin_booking.php" >Booking					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                          <a class="navbar-brand" style="color:White;"href="admin_feedback.php"> Feedback						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          <a class="navbar-brand" style="color:White;"href="chat.php" >Chat					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						  <a class="navbar-brand" style="color:White;"href="login.php" >logout					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>


                          
						
						
					</div>

				</div>


				
				
		</nav>

			<div class="w3-card-4 w3-col s12 w3-margin">
				
				<div class="w3-container w3">
					<!--searching bar-->
					


					<div class="row" >											
				<!--searching bar-->
					<div class="col-sm-6">
						<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<div class="col-sm-4" >
									<input style="border-color:grey;" class="form-control"  name="keyname" type="text" placeholder="Keyword" id="meal_name">
									
								</div>
								<div class="col-sm-2">
									<input style="padding-top:5px;" class="btn btn-dark" type="submit" value="Search" name="submit">
									
								</div>
								


							</form>
						
					</div>																	
					</div>


















					
					
					<div id="result"></div>						
						<!--end search bar-->	
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Booking ID</th>
										<th>Customer ID</th>
										<th>Time</th>
										<th>Date </th>
										<th>Meal ID</th>
										<th>Decoration ID</th>
										<th>Room No</th>
										<th>Employee</th>

									</tr>

<?php 
									if(isset($_POST["submit"])) {

												include './db.con.php';

												$sql = "SELECT * FROM booking WHERE id LIKE '%{$_POST["keyname"]}%' OR customer_id LIKE '%{$_POST["keyname"]}%'  OR time LIKE '%{$_POST["keyname"]}%' OR date LIKE '%{$_POST["keyname"]}%'  OR meal_id LIKE '%{$_POST["keyname"]}%'OR decoration_id LIKE '%{$_POST["keyname"]}%'OR room_no LIKE '%{$_POST["keyname"]}%'OR employee LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


									while($row = $result->fetch_assoc()) {
											 
											$i++;

												echo "<tr>";
											echo "<td>"; echo $row['id'];  echo "</td>";
											
											echo "<td>"; echo $row['customer_id'];  echo "</td>";
											echo "<td>"; echo $row['time'];  echo "</td>";
											echo "<td>"; echo $row['date'];  echo "</td>";
									
											echo "<td>"; echo $row['meal_id'];  echo "</td>";
											echo "<td>"; echo $row['decoration_id'];  echo "</td>";
											echo "<td>"; echo $row['room_no'];  echo "</td>";
											echo "<td>"; echo $row['employee'];  echo "</td>";
											
											
											
											
											}
										}


											} elseif(!isset($_POST["submit"])) {

												include './db.con.php';

												$sql = "SELECT * FROM booking";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


									while($row = $result->fetch_assoc()) {
											 
											$i++;

												echo "<tr>";
											echo "<td>"; echo $row['id'];  echo "</td>";
											
											echo "<td>"; echo $row['customer_id'];  echo "</td>";
											echo "<td>"; echo $row['time'];  echo "</td>";
											echo "<td>"; echo $row['date'];  echo "</td>";
									
											echo "<td>"; echo $row['meal_id'];  echo "</td>";
											echo "<td>"; echo $row['decoration_id'];  echo "</td>";
											echo "<td>"; echo $row['room_no'];  echo "</td>";
											echo "<td>"; echo $row['employee'];  echo "</td>";
											
											
													
													
											echo "</tr>";


																						
											}
										}


											}
?>
	















								</thead>				
							</table>
						</div>	
				</div>
			</div>
			<!-- Footer -->

			<div id="footer">

				<nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  <!--nav bar -->
					<!-- Navbar content -->
					<div class="container">
						<div class="row">
								<div class="col1">
									<img src="Images/logo.png" alt="Dulsara Logo"></br></br>
								</div>
					   
							<div class="col2">
									Dulsara Restaurant
									<address> No. 26, Cocowatte Road,</br>Badulla</address> 
							</div>
							
							<div class="col3">
							055 222 8215 <br>
							Coordinate<br> <a href="https://www.google.com/maps/place/6.9853025,81.058579" target="_blank" style="color:white;"> 6.9853025, 81.058579</a>
							</div>
					   
							<div class="col4">
								<p class="icons">
									<a href="#" class="normaltip" title="Facebook"><img src="Images/icon1.gif" alt=""></a>
									<a href="#" class="normaltip" title="Twitter"><img src="Images/icon3.gif" alt=""></a>
								</p>
						  
										 weekday      7:30 AM – 10:30 PM <br>
										weekend    7:30 AM – 10:30 PM
							</div>
						</div>
					</div>
				</nav>
			</div>
			
		</body>
	</html>