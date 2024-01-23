<?php
include_once("connection.php");

if(isset($_POST['register'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $user_type = htmlentities($_POST['user_type']);
    $pword = sha1($_POST['pword']);
    
   
    // Check for existing email
    $checkEmailQuery = $conn->prepare("SELECT id FROM user_form WHERE email = :email");
    $checkEmailQuery->bindParam(":email", $email);
    $checkEmailQuery->execute();

    
    if ($checkEmailQuery->rowCount() > 0) {
        echo "<script>alert('This email already exists. Please try another email!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {

    $imgFile = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];
    
    $upload_dir = "images/";

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $validExtensions = array('jpeg', 'jpg', 'png');

    $newname = rand(1000, 100000000).".".$imgExt;

    if(in_array($imgExt, $validExtensions)){
        if($imgSize <5000000){
          move_uploaded_file($tmpName,$upload_dir.$newname);
          
                $query = $conn->prepare("INSERT INTO user_form (fname, lname,  email, password, user_type, img) 
                VALUES (:fname,  :lname,  :email, :pword, :user_type, :img)");
                $query->bindParam(":fname", $fname);
                $query->bindParam(":lname", $lname);
                $query->bindParam(":email", $email);
                $query->bindParam(":pword", $pword);
                $query->bindParam(":user_type",$user_type);
                $query->bindParam(":img", $newname);
                $query->execute();

                echo "<script>alert('COMPLETED!')</script>";
                echo "<script>window.open('login.php','_self')</script>";
                echo "<script>alert('File sucessfully uploaded')</script>";
                 echo "<script>window.open('index.php','_self')</script>";
            }else {
                echo "<script>alert('your file is to large')</script>";
                 echo "<script>window.open('index.php','_self')</script>";
            
            }
    } echo "<script>alert('Sorry, only jpeg, jpg and png is allowed')</script>";
    echo "<script>window.open('index.php','_self')</script>";
      }
    }
?>