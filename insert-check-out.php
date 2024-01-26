<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];


if(!isset($user_id)){
   header('location:login.php');
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