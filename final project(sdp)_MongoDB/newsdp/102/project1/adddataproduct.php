<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
        if($_POST){
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->store;
$rec['_id']=$_POST['_id'];
$rec['image']=$_POST['image'];
$rec['name']=$_POST['name'];
$rec['price']=$_POST['price'];

$db->items->insertOne($rec);
        }
        header('location:showproduct.php');
    }
    catch(MongoConnectionException $e){
        var_dump($e);
    
        }
    }
?>