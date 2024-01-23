
<?php
include_once("connection.php");
$user_id = $_SESSION['user_id'];
if(isset($_SESSION['user_id'])){
	
	$userQuery = $conn->prepare("SELECT fname, lname, img FROM user_form WHERE id = '$user_id'");
	$userQuery->execute();
	
	while($data = $userQuery->fetch()){
		$pangalan = $data['fname'];
		$apelyido = $data['lname'];
		$picture = $data['img'];
	}
} else {
	header("Location:login.php");
	die();
}
?>