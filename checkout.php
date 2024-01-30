<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');

 };


 if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:index.php');
 }
 if(isset($_POST['place_order'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['adds'];
    $zipcode = $_POST['code'];
    $con_number = $_POST['number'];
    $payment = $_POST['payment'];

    $price_total = 0;
    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'");
    if(mysqli_num_rows($cart_query) > 0){

      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = (int)$product_item['price'] * (int)$product_item['quantity'];
         $price_total += $product_price;

      };
   };


   

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `checkout`(name, email, adds, code,number, payments, total_products, total_price) VALUES('$name','$email','$address','$zipcode','$con_number','$payment','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
    echo "<script>alert('COMPLETED!')</script>";
  
   }
}

 
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="./img/MULANA-removebg-preview.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="checkout-style.css">
</head>
<body>
<div class="main-container">

<header>
     
     </header>
     <header class="title">Place order</header> 
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
                
                <div class="input-box">
                    <a id="submit" href="shopping.php?delete_all" onclick="return confirm('Are you sure?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Go Back?</a>
                </div>
                <div class="input-box">
                    <a id="submit" href="homepage.php">cancel?</a>
                </div>
            </div>
               </table>
               <div class="grand">
               grand total :
    ₱<?php echo $grand_total; ?>
    </div>
            </form>
            
</tbody>
</table>

</div>
</body>
</html>