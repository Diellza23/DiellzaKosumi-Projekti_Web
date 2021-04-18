<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=restoranti", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}
?>

<!-- PDO ne kete rast perdoret per te insertu te dhena ne databaze -->