<?php 
include("connection.php");
session_start();
$user_id = $_SESSION['user_id'];



$select = $conn->prepare("SELECT fname, lname, email ,password, img FROM user_form WHERE id = '$user_id'");
$select->execute();

            while($row = $select->fetch()){
                $firstname = $row['fname'];
                $lastname = $row['lname'];
                $emails = $row['email'];
                $password = $row['password'];
                $image = $row['img'];
            }

if(isset($_POST['update'])){
  
  $firstnames = $_POST['fname'];
  $lastnames = $_POST['lname'];
  $email = $_POST['email'];
  $password= $_POST['password'];

 //$image = $_FILE['imga'];
  
  
   

    // Check for existing email
    $checkEmailQuery = $conn->prepare("SELECT id FROM user_form WHERE email = :email");
    $checkEmailQuery->bindParam(":email", $email);
    $checkEmailQuery->execute();

    if ($checkEmailQuery->rowCount() > 1) {
        echo "<script>alert('This email already exists. Please try another email!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {

    $imageFile = $_FILES['imga']['name'];
    $tmpName = $_FILES['imga']['tmp_name'];
    $imgSize = $_FILES['imga']['size'];
    
    $upload_dir = "images/";

    $imgExt = strtolower(pathinfo($imageFile, PATHINFO_EXTENSION));
    $validExtensions = array('jpeg', 'jpg', 'png');

    $newnames = rand(1000, 100000000).".".$imgExt;

    if(in_array($imgExt, $validExtensions)){
      if($imgSize <5000000){
        move_uploaded_file($tmpName,$upload_dir.$newnames);       
        $query = $conn->prepare("UPDATE user_form SET fname = :one, lname = :two, email = :three, password = :five, img = :seven WHERE id = :uid");
        $query->bindParam(":one",$firstnames);
        $query->bindParam(":two",$lastnames);
        $query->bindParam(":three",$email);
        $query->bindParam(":five",$password);
        $query->bindParam(":seven",$newnames);
        $query->bindParam("uid",$user_id);
        $query->execute();

        echo "<script>alert('successfully Updated!')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
        }else {
                      echo "<script>alert('your file is to large')</script>";
                      echo "<script>window.open('profile.php','_self')</script>";
                  
                  }
          } echo "<script>alert('Sorry, only jpeg, jpg and png is allowed')</script>";
          echo "<script>window.open('profile.php','_self')</script>";
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ViewRecords</title>
  <link rel="stylesheet" href="edit-style.css">
</head>
<body>
  <div class="con">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="con-1">
      <div class="title">
        <h2>Update Records</h2>
      </div>
    </div>
    <div class="image">
        <div class="max-1">
          <label for="img" id="profile_picture">old photos</label>  
          <img id="profile" src="images/<?php echo $image;?>"alt="Picture" width="250">

        </div>
    </div>
    <div class="con-2">
      <form action="" method="post">
        <div class="max">
          <label for="fname">Firstname:</label>  
          <input type="text" name="fname" value="<?php echo $firstname; ?>" required>
        </div>
        
        <div class="max">
          <label for="lname">Lastname:</label>  
          <input type="text" name="lname" value="<?php echo $lastname; ?>" required>
        </div>
       
        <div class="max">
          <label for="email">Email:</label>  
          <input type="text" name="email" value="<?php echo $emails; ?>" required>
        </div>
        
        <div class="max">
          <label for="uname">Password:</label>  
          <input type="text" name="password" value="<?php echo $password; ?>" required>
        </div>
        <div class="max">
          <label for="new_image">new image</label>
          <input type="file" accept="image/*" id="sub" name="imga">  
          
        </div>
        <div class="max">
          <label for="&nbsp"></label>
          <input type="submit" id="sub1" name="update" value="register">  
        </div>
        <div class="cancel">
            <a class="can" href="profile.php">cancel?
            </a>
        </div>
    </div>
  </form>
  </div>
</body>
</html>
