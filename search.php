<?php
include_once("connection.php");
?>


  
  <?php
  if(isset($_POST['find'])){
  $search = $_POST['search'];
  
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


    
        echo  "<table border>".
        "<tr>".
        
        "<td><img src=".$product_image."></td>".
        "<td>".$productName."</td>".
        "<td>".$price."</td>".
        "</tr>".
        "</table>";
          
      }				
}
?>
