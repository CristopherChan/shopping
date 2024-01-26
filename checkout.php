<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
 };
 if(isset($_POST['place_order'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['adds'];
    $zipcode = $_POST['code'];
    $con_number = $_POST['number'];
    $payment = $_POST['payment'];


    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = -2;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price']) * ($product_item['quantity']);
         $price_total += $product_price;

      };
   };


   

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `checkout`(name, email, adds, code,number, payments, total_products, total_price) VALUES('$name','$email','$address','$zipcode','$con_number','$payment','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$email."</span> </p>
            <p> your email : <span>".$address."</span> </p>
            <p> your address : <span>".$zipcode."</span> </p>
            <p> your payment mode : <span>".$payment."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }
}

 
 



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
     <header class="title">Place order</header>

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
        <div class="input-box-2">
        <img src="<?php echo $fetch_cart['image']; ?>" height="100" alt="">
        <?php echo $fetch_cart['name']; ?>
        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
        ₱<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>
                </div>
       
        
        <?php
            $grand_total += $sub_total;
            }  
       
            
        }
    }
}
      
?>
         
               <div class="colunm">
                <div class="input-box">
                    <label for="fname">Firstname:</label>
                    <input type="text" id="fname" name="name" placeholder="Enter First Name" required>
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