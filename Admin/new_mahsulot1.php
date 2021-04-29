<?php

if(isset($_GET['name']) && isset($_GET['image']) && isset($_GET['content'])&&  $_GET['image']!="" &&  $_GET['name']!="" && $_GET['content']!="" ) {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $image = $_GET['image'];
    $content = $_GET['content'];
    $id = $_GET['select1'];

    $sql = "INSERT INTO `mahsulotlar`(`name`,`image`,`content`,`kategoriya_id`) VALUES('$name','$image', '$content', '$id')";
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:Mahsulotlar.php');
    exit;
}
else{
    echo "xatolik";
}


?>