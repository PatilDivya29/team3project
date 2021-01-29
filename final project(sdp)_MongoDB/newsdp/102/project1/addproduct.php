<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->store;
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adddataproduct.php" method="POST">
    <input type="number" name="_id" placeholder="id"><br>
    <input type="text" name="image" placeholder="insert_image"><br>
     <input type="text" name="name" placeholder="name"><br>
     <input type="number" name="price" placeholder="price"><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>