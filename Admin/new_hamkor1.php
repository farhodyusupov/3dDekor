<?php

if(isset($_GET['name']) && isset($_GET['phone_number'])&& isset($_GET['addres'])  &&  $_GET['name']!="" && $_GET['addres']!="" && $_GET['phone_number']!="" ) {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $phone_number = $_GET['phone_number'];
    $addres = $_GET['addres'];
//    $id = $_GET['select1'];

    $sql = "INSERT INTO `hamkorlar`(`name`,`phone_number`,`addres`) VALUES('$name','$phone_number', '$addres')";
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:Hamkorlar.php');
    exit;
}
else{
    echo "xatolik";
}


?>