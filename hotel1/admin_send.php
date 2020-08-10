<?php
session_start();
include 'db.con.php';
$mgs = $_POST['mgs'];
$id=$_POST['id'];
$sql="insert into chat(mgs,CustomerID) values('$mgs','$id')";
$result=$conn->query($sql);

header("Location:admin_chat.php");
?>