
<?php
include_once("connection.php");
if(isset($_SESSION['cid'])){
	$uid = $_SESSION['cid'];
	$userQuery = $conn->prepare("SELECT fname, lname, img FROM user_form WHERE id	 = :uid");
	$userQuery->bindParam(':uid', $uid);
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