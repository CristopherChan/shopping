<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
 };
 
 
 
 if(isset($_POST['add_to_cart'])){
 
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 };


 if(isset($_POST['place_order'])){
    
    $user_fname = $_POST['fname'];
    $user_lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['adds'];
    $code = $_POST['code'];
    $con_number = $_POST['number'];
    $payment = $_POST['payment'];
    $product_quantity = $_POST['quantity'];
 
 
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `checkout` WHERE fname = '$user_fname' AND id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'failed place order!';
    }else{
       mysqli_query($conn, "INSERT INTO `checkout`(id, fname, lname, email, adds, code, number, payments, product_image, quanmtity) VALUES('$user_id', '$user_fname', '$user_lname', '$email', '$address', '$code', '$con_number', '$payment', '$product_quantity')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 };



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="checkout-style.css">
</head>
<body>
<div class="main-container">

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
            
            <li><a href="shopping.php"><img class="people" src="./img/grocery-store.png" alt=""></a></li>

            <li><a href="profile.php"><img class="people" src="./img/people.png" alt=""></a></li>

            <li><a href="logout.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn"><img class="people" src="./img/icons8-logout-30.png" alt="out" title="log out"></a></li>
                

            </ol>
  </nav>
     </header>
     <header class="title"> check out</header>

   <?php
      $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      $grand_total = 0;
      if(mysqli_num_rows($cart_query) > 0){
         while($fetch_cart = mysqli_fetch_assoc($cart_query)){
   ?>
     
     
<form action="" method="post" class="check">
    <table class="table">
        <?php
            $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $grand_total = 0;
                if(mysqli_num_rows($cart_query) > 0){
                while($fetch_cart = mysqli_fetch_assoc($cart_query)){
        ?>
      
            <img src="<?php echo $fetch_cart['image']; ?>" height="100" alt="">
        <?php echo $fetch_cart['name']; ?>
         
            <form action="" class="get" method="post">
               <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
               <input type="submit" name="place_order" value="update" class="option-btn">
            </form>
         
        ₱<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>
      
        <?php
            $grand_total += $sub_total;
            }  
            }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
        }
    }
}
      
?>
         
               <div class="colunm">
                <div class="input-box">
                    <label for="fname">Firstname:</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>
                <div class="input-box">
                    <label for="lname">Lastname:</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter LastName" required>
                </div>
               
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                
                <div class="input-box">
                    <label for="adds">Address:</label>
                    <input type="text" id="adds" name="adds" placeholder="Enter Username" required>
                </div>
                <div class="input-box">
                    <label for="adds">Zip Code:</label>
                    <input type="text" id="code" name="code" placeholder="Enter Username" required>
                </div>
                <div class="input-box">
                    <label for="adds">Contact Number:</label>
                    <input type="number" id="number" name="number" placeholder="Enter Contact Number" required>
                </div>
                <div class="input-box">
                <label for="payment">Payment Option:</label>
                    <select name="payment" id="pays">
                    <option value="cod">Cash On Delivery</option>
                    <option value="Ewallet">Gcash</option>
                    <option value="banks">banks</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="submit" id="submit" name="place_order" value="Place Order">
                </div>
                
            </div>
               </table>
               grand total :
    ₱<?php echo $grand_total; ?>
            </form>
  
</tbody>
</table>




            <!--<div class="colunm">
                <div class="input-box">
                    <label for="fname">Firstname:</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>
                <div class="input-box">
                    <label for="lname">Lastname:</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter LastName" required>
                </div>
               
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                
                <div class="input-box">
                    <label for="adds">Address:</label>
                    <input type="text" id="adds" name="adds" placeholder="Enter Username" required>
                </div>
                <div class="input-box">
                    <label for="adds">Zip Code:</label>
                    <input type="text" id="code" name="code" placeholder="Enter Username" required>
                </div>
                <div class="input-box">
                    <label for="adds">Contact Number:</label>
                    <input type="number" id="number" name="number" placeholder="Enter Contact Number" required>
                </div>
                <div class="input-box">
                <label for="payment">Payment Option:</label>
                    <select name="payment" id="pays">
                    <option value="cod">Cash On Delivery</option>
                    <option value="Ewallet">Gcash</option>
                    <option value="banks">banks</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="submit" id="submit" name="place_order" value="Place Order">
                </div>
                
            </div>-->
 



</div>
</body>
</html>