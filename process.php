<?php
include_once("connection.php");
if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	
	session_start();
	
	$statement = $conn->prepare("SELECT id, user_type FROM user_form WHERE email = :email AND password = :pword");
	$statement->bindParam(':email',$email);
	$statement->bindParam(':pword',$password);
	$statement->execute();
	
	$count = $statement->rowCount();
	
	if($count > 0){
		while($row = $statement->fetch()){
			$id = $row['id'];
			$role = $row['user_type'];
			$_SESSION['cid'] = $id;

			if ($role == 'user') {
			header("Location:index.php");
			}else if ($role == 'admin'){
			header("Location:upload.php");
			}
	}
	} else {
		echo "<script>alert('Sorry, Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
}

?>