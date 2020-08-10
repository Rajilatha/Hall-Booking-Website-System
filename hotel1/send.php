<?php
session_start();
include 'db.con.php';
$mgs = $_POST['mgs'];
$id=$_SESSION['CustomerID'];
echo$id;
$sql="insert into chat(mgs,CustomerID) values('$mgs','$id')";
$result=$conn->query($sql);

header("Location:chat.php");
?>