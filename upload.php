<?php

include 'config.php';

if(isset($_POST["submit"])){
  $productname = $_POST["name"];
  $price = $_POST["price"];

  //For uploads photos
  $upload_dir = "images/"; //this is where the uploaded photo stored
  $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      echo "<script>alert('The file already exist')</script>";
      $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($productname != "" && $price !=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO products(name,price,image)
          VALUES('$productname','$price','$product_image')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your product uploaded successfully')</script>";
          }
      }
  }


  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload-style.css">
</head>
<body>

    <section id="upload_container">
    <h1 class="title">upload your product here!</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <ul>
            <li><input type="text" name="name" id="productname" placeholder="Product Name" required></li>
            <li><input type="number" name="price" id="price" placeholder="Product Price" required></li>
            <li><input type="file" name="imageUpload" id="imageUpload" required hidden></li>
            <li><input id="upload" type="submit" value="Upload" name="submit"></li>
            <li><a  href="login.php"><h1 class="cancel">cancel?<h1></a></li>
            <li><a  href="vieworder.php"><h1 class="order">View Order<h1></a></li>
            </ul>
        </form>
    </section>

    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>