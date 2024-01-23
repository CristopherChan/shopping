<?php


  include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kablammo&family=Oswald:wght@600&family=PT+Serif:wght@700&family=Poppins:wght@200;300;600&family=Shrikhand&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">

</head>
<body>
     <header>
     <nav>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <img class="menu" src="./img/icons8-menu-50.png" alt="menu">
            </label>
            <label class="logo"><a href="index.php"><img class="mulana" src="./img/MULANA-removebg-preview.png" alt="picture"></a></label>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="home.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="viewrecord.php">Customize</a></li>
            </ul>
            
            <ol class="imgs">
            
            <li><form action="search.php" method="post">
                <input type="text" placeholder="search here..." name="search">
                <input type="submit" name="find" id="find" value="search">
            </form></li>
            
                <li><a href="profile.php"><img id="profile" src="upload/<?php echo $larawan;?>" alt="User Profile" ></a></li>
    
                <li><a href="logout.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout<img class="people" src="./img/icons8-logout-30.png" alt="out" title="log out"></a></li>
                <li><a href="cart.php"><img class="cart" style="width: 30px; height: 30px;" src="./img/grocery-store.png" alt=""> <span id="badge"><?php echo mysqli_num_rows($all_cart);?></span></a></li>

            </ol>
  </nav>
     </header>
</body>
</html>