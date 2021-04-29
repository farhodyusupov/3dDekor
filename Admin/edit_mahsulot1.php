<?php

if(isset($_GET['name']) && isset($_GET['image']) && isset($_GET['content'])  &&  $_GET['name']!="" && $_GET['image']!="" && $_GET['content']!="") {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $image = $_GET['image'];
    $content = $_GET['content'];
    $id=$_GET['id'];
    $kategoriya_id = $_GET['select1'];

    $sql = "UPDATE kategoriya SET name=? , image=?, content=?,kategoriya_id=? WHERE id=?";
    $db->prepare($sql)->execute([$name , $image , $content ,$kategoriya_id, $id]);


    header('Location:Main_kat.php');
    exit;
}
else{
    header('Location:Main_kat.php');
    exit;
}


?>