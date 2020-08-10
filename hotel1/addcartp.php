<?php
session_start();
?>
<?php
if (empty($_SESSION['CustomerID'])) {
    header('location: pb.php');
}

$hostname = "localhost";
$user = "root";
$passwordC = "";
$database = "jkhall";
$con = mysqli_connect($hostname, $user, $passwordC, $database)
        or die("Unable to connect MYSQL");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            foreach($_SESSION["cart"] as $keys => $values){
           
		$item_quantity = $_POST["quantity"];
		$item_price = $_POST["hidden_price"];
		$item_id = $_POST["hidden_id"];
        $cid=$_POST['cid'];   
            
                      $sql = "INSERT INTO cartp (CustomerID,meal_id,quantity,Booking_Id,isActive) VALUES ('" . $userid . "','" . $itemid . "','" . $quantity . "','" . $cid. "','1')";
            
            $result = mysqli_query($con, $sql);
          //  $row = mysqli_fetch_array($result);
            if ($result > 0) {
                echo 'Successfully added';
               // header('location: cart1.php');
            } else {
                echo 'There is an error to add';
            }
        }
        }
        ?>


    </body
    >
</html>
