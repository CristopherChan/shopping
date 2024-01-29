<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, sha1($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:homepage.php');
   }else{
		echo "<script>alert('Sorry, Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="login-style.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->

</head>
<body>


   <form action="" method="post">
    <div class="imgcontainer">
      <h1 class="welcome">welcome</h1>
      <img src="./img/MULANA-removebg-preview.png" alt="picture" class="logo">
    </div>
  
    <div class="container">
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <input type="password" placeholder="Enter Password" name="password" required>
          
      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <div class="input-box">
         are you admin?<a class="log" href="admin-login.php" target="_self">log in</a>
      </div>
    </div>
  
    <div class="input-box">
      Don't have an account?<a class="log" href="create.php" target="_self">Sign Up</a>
  </div>
  </form>

</body>
</html>