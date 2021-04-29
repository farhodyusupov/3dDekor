<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=dekoruz", 'root',  '');

    $query = $db->query('DELETE FROM mahsulotlar WHERE `id`='.$id);
    $query->execute();
    header('Location:Mahsulotlar.php');
    exit;
}
else{
    header('Location:Mahsulotlar.php');
    exit;
}

?>