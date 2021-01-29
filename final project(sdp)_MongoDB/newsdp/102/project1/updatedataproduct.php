<?php
require 'vendor/autoload.php'; 
session_start();
if(extension_loaded("mongodb"))
{
    try{
$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->store;

   
$id=$_POST['_id'];
$_SESSION['id']=$id;
$image=$_POST['image'];
$name=$_POST['name'];
$price=$_POST['price'];
$id=$_SESSION['id'];
echo $_SESSION['id'];

$db->items->updateOne(
    array('_id'=>$_SESSION['id']),
    array(
        '$set' => array(
            'id' => $id,
            'image'=>$image,
            'name'=>$name,
            'price'=>$price
           
        )
        )
 );
 header('location:showproduct.php');
    }catch(MongoConnectionException $e){
        var_dump($e);
    }
}
    ?>