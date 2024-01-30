<?php
include_once("connection.php");
?>


  
  <?php
  if(isset($_POST['search'])){
  $search = $_POST['search'];
  
  			
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="./img/MULANA-removebg-preview.png">
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
  <title>Document</title>
  <link rel="stylesheet" href="search-style.css">
</head>
<body>

<div class="table">
<header>
     <nav>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <img class="menu" src="./img/icons8-menu-50.png" alt="menu">
            </label>
            <label class="logo"><a href="homepage.php"><img class="mulana" src="./img/MULANA-removebg-preview.png" alt="picture"></a></label>
            <ul>
                <li><a class="active" href="homepage.php">Home</a></li>
                <li><a href="homapage.php">Shop</a></li>
                <li><a href="about-homepage.php">About</a></li>
            </ul>
            
            <ol class="imgs">
            <li><form action="search.php" method="post">
                <input type="text" id="search" placeholder="search here..." name="search">
            </form></li>
            <li><a href="shopping.php"><img class="people" src="./img/grocery-store.png" alt=""></a></li>

            <li><a href="profile.php"><img class="people" src="./img/people.png" alt=""></a></li>

                

            </ol>
  </nav>
     </header>
  <div class="table-1">
  <h2>seach your favorite mulana products</h2>
 <br>
  <?php    
  $query = $conn->prepare("SELECT * FROM products WHERE name LIKE '%$search%' ");
	$query->execute();
	
  $count = $query->rowCount();
  
  if($count < 1){
    echo "no records!";
    
  }else
  {
    echo "$count record found! for $search";
  }
  

  
			while($row = $query->fetch()){
        $product_image = $row['image'];
				$productName = $row['name'];
        $price = $row['price'];


    
        echo "<table>".
        "<thead>".
        "<tr>".
          "<th>product images</th>".
          "<th>product name</th>".
          "<th>price</th>".
          
        "</tr>".
      "</thead>".



        "<tr>".
        
        "<td><img src=".$product_image."></td>".
        "<td>".$productName."</td>".
        "<td>".$price."</td>".
        "</tr>".
        "</table>";
          
      }				

?>
</div>
  </div>
</body>
</html>