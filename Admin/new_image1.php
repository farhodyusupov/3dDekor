<?php

if(isset($_GET['name']) && isset($_GET['image'])  &&  $_GET['name']!="" && $_GET['content']!="" ) {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $image = $_GET['image'];
    $content = $_GET['content'];
//    $id = $_GET['select1'];

    $sql = "INSERT INTO `gallery`(`name`,`image`,`content`) VALUES('$name','$image', '$content')";
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:Admin.php');
    exit;
}
else{
    echo "xatolik";
}


?>