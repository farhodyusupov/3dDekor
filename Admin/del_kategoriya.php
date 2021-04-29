<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=dekoruz", 'root',  '');

    $query = $db->query('DELETE FROM kategoriya WHERE `id`='.$id);
    $query->execute();
    header('Location:Kategoriya.php');
    exit;
}
else{
    header('Location:Kategoriya.php');
    exit;
}

?>