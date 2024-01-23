
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
</head>

<body>
    
<h1>Registration Form</h1>
<a href="viewrecords.php">View Records</a> | <a href="logout.php">Logout</a><br><br>

<form action="search.php" method="post">
<input type="text" placeholder="search here..." name="search">
<input type="submit" name="find" id="find" value="search">

</form>
<br>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>product name</td>
            <td><input type="text" name="pname" placeholder="Enter product Name" required></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="pprice" placeholder="Enter LastName" required></td>
        </tr>
        
            <td>Picture</td>
            <td><input type="file" name="img" accept="image/*" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="register" value="Register"></td>
        </tr>
    </table>
</form>
</body>
</html>