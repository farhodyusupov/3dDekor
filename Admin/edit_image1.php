<?php

//var_dump($_GET);exit;
if(isset($_GET['name']) && isset($_GET['image']) && isset($_GET['content'])  &&  $_GET['name']!="" && $_GET['image']!="" && $_GET['content']!="") {

    $db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

    $name = $_GET['name'];
    $image = $_GET['image'];
    $content = $_GET['content'];
    $id=$_GET['id'];
// $query = $dbh->query('UPDATE main SET `phrase`="'.$phrase.'",`description`="'.$description.'",`example`="'.$example.'" WHERE `id`='.$id);
// $query = 'UPDATE `main` SET `phrase`=$phrase,`description`=$description,`example`=$example WHERE `id`=$id';
// $query = $dbh->prepare($query);

// $query->execute();
$sql = "UPDATE gallery SET name=? , image=?, content=? WHERE id=?";
$db->prepare($sql)->execute([$name , $image , $content , $id]);


header('Location:Admin.php');
exit;
}
else{
header('Location:Admin.php');
exit;
}
// $query = $dbh->query('UPDATE posts SET `nomi`="'.$nomi.'",`vaqti`="'.$vaqt.'",`categorya`="'.$categoriya.'",`rasmi`="'.$rasmi.'",`content`="'.$content.'" WHERE `id`='.$id);

// $query->execute();



?>