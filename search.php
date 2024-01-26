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
            <label class="logo"><a href="index.php"><img class="mulana" src="./img/MULANA-removebg-preview.png" alt="picture"></a></label>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            
            <ol class="imgs">
            <li><form action="search.php" method="post">
                <input type="text" id="search" placeholder="search here..." name="search">
            </form></li>
            <li><a href="shopping.php"><img class="people" src="./img/grocery-store.png" alt=""></a></li>

            <li><a href="profile.php"><img class="people" src="./img/people.png" alt=""></a></li>

            <li><a href="logout.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn"><img class="people" src="./img/icons8-logout-30.png" alt="out" title="log out"></a></li>
                

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