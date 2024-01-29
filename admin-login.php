<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="login-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mulanaPh</title>
</head>
<body>
  <form action="process.php" method="post">
    <div class="imgcontainer">
      <h1 class="welcome">welcome</h1>
      <img src="./img/MULANA-removebg-preview.png" alt="picture" class="logo">
    </div>
  
    <div class="container">
      <input type="text" placeholder="Enter email" name="email" required>
  
      <input type="password" placeholder="Enter Password" name="password" required>
          
      <button type="submit" name="login">Login</button>
      <div class="cancel">
      <a class="can" href="login.php">cancel</a>
      </div>
    </div>
  
   
    <div class="input-box">
      Don't have an account?<a class="log" href="create.php" target="_self">Sign Up</a>
  </div>
  </form>
</body>
</html>