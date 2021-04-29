<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=dekoruz", 'root',  '');

    $query = $db->query('DELETE FROM main WHERE `id`='.$id);
    $query->execute();
    header('Location:Main_kat.php');
    exit;
}
else{
    header('Location:Main_kat.php');
    exit;
}

?>