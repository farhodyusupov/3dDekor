<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=dekoruz", 'root',  '');

    $query = $db->query('DELETE FROM hamkorlar WHERE `id`='.$id);
    $query->execute();
    header('Location:Hamkorlar.php');
    exit;
}
else{
    header('Location:Hamkorlar.php');
    exit;
}

?>