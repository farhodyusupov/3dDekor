<?php

//var_dump($_GET);exit;
if (isset($_GET['name']) && isset($_GET['phone_number']) && isset($_GET['addres']) && $_GET['name'] != "" && $_GET['phone_number'] != "" && $_GET['addres'] != "") {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $phone_number = $_GET['phone_number'];
    $addres = $_GET['addres'];
    $id = $_GET['id'];

    $sql = "UPDATE hamkorlar SET  name=? , phone_number=?, addres=? WHERE id=?";
    $db->prepare($sql)->execute([$name, $phone_number, $addres, $id]);


    header('Location:Hamkorlar.php');
    exit;
} else {
    header('Location:Hamkorlar.php');
    exit;
}
// $query = $dbh->query('UPDATE posts SET `nomi`="'.$nomi.'",`vaqti`="'.$vaqt.'",`categorya`="'.$categoriya.'",`rasmi`="'.$rasmi.'",`content`="'.$content.'" WHERE `id`='.$id);

// $query->execute();


?>