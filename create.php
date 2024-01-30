<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&family=Shrikhand&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&family=Shrikhand&display=swap" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="create-style.css">
  <title>login</title>
</head>
<body>
  <div class="main-container">
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <img class="menu" src="./img/icons8-menu-50.png" alt="menu">
    </label>
    <label class="logo"><a href="index.php"><img class="mulana" src="./img/MULANA-removebg-preview.png" alt="picture"></a></label>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ol class="imgs">
      <li><a href="login.php" target=""><img class="people" src="./img/people.png" alt="picture" ></a></li>
    </ol>
  </nav>
  <div class="main-container-1">
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <header class="title">Create An Account</header>
            <h4 class="info">personal information</h4>
            
            <div class="colunm">
                <div class="input-box">
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>

                <div class="input-box">
                    <input type="text" id="lname" name="lname" placeholder="Enter LastName" required>
                </div>
               
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="input-box">
                    <input type="password" id="pword" name="pword" placeholder="Enter Password" required>
                </div>
                <div class="input-box">
                <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
                </select>
                </div>
                <div class="input-box">
                    <input type="file" id="file" name="img" accept="image/*">
                </div>
                
                <div class="input-box">
                    <label for="&nbsp"></label>
                    <input type="submit" id="submit" name="register" value="Register">
                </div>
                <div class="input-box">
                  <span>Already have an account?</span><a class="log" href="login.php">Sign in</a>
              </div>
                
            </div>
        </table>
    </form>
  </div>
</div>
</body>
</html>