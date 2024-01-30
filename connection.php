<?php
$hostname = "localhost";
$uname = "root";
$pword = "";
$db = "store_db";

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $uname, $pword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Connection Failed!: " .$e->getMessage();
}
?>