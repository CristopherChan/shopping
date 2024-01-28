<?php
include_once("connection.php");
session_start();

$id = $_GET['uid'];

$query = $conn->prepare("DELETE FROM checkout WHERE id = :uid");
$query->bindParam(":uid",$id);
$query->execute();

echo "<script>alert('Successfully Deleted!')</script>";
echo "<script>window.open('vieworder.php','_self')</script>";

?>