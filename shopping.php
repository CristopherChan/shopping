<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   header('location:homepage.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:homepage.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="./img/MULANA-removebg-preview.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<div class="container">
   
<div class="shopping-cart">

<h1 class="heading">shopping cart</h1>

<table>
   <thead>
      <th>image</th>
      <th>name</th>
      <th>price</th>
      <th>quantity</th>
      <th>total price</th>
      <th>action</th>
   </thead>
   <tbody>
   <?php
      $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      $grand_total = 0;
      if(mysqli_num_rows($cart_query) > 0){
         while($fetch_cart = mysqli_fetch_assoc($cart_query)){
   ?>
      <tr>
         <td><img src="<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
         <td><?php echo $fetch_cart['name']; ?></td>
         <td>₱<?php echo $fetch_cart['price']; ?></td>
         <td>
            <form action="" method="post">
               <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
               <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
               <input type="submit" name="update_cart" value="update" class="option-btn">
            </form>
         </td>
         <td>₱<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
         <td><a href="shopping.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
      </tr>
   <?php
      $grand_total += $sub_total;
         }  
      }else{
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
      }
   ?>
   <tr class="table-bottom">
      <td colspan="4">grand total :</td>
      <td>₱<?php echo $grand_total; ?></td>
      <td><a href="shopping.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
   </tr>
</tbody>
</table>

<div class="cart-btn">  
   <a href="checkout.php" class="btn <?php echo ($grand_total > 1)?>">proceed to checkout</a>
</div>
<div class="cart-btn">  
   <a class="btn" href="homepage.php">go back?</a>
</div>
</div>
</div>
</body>
</html>