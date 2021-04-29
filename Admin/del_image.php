<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=dekoruz", 'root',  '');

    $query = $db->query('DELETE FROM gallery WHERE `id`='.$id);
    $query->execute();
    header('Location:Admin.php');
    exit;
}
else{
    header('Location:Admin.php');
    exit;
}

?>