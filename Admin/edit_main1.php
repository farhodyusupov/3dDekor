<?php

//var_dump($_GET);exit;
if(isset($_GET['name']) && isset($_GET['image']) && isset($_GET['content'])  &&  $_GET['name']!="" && $_GET['image']!="" && $_GET['content']!="") {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $image = $_GET['image'];
    $content = $_GET['content'];
    $id=$_GET['id'];

    $sql = "UPDATE main SET name=? , image=?, content=? WHERE id=?";
    $db->prepare($sql)->execute([$name , $image , $content , $id]);


    header('Location:Main_kat.php');
    exit;
}
else{
    header('Location:Main_kat.php');
    exit;
}




?>