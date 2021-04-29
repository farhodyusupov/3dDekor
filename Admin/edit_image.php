<?php
$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $gallery = $db->query("SELECT * FROM gallery WHERE id = $id")->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<body>

<h3 align="center">Yangilash</h3>
<div style="width: 80% ;padding-left: 20%">
<form action="edit_image1.php?"  class="text-center" method="GET">

    <div style="border-width: 10px">
        <br>
        <label>Nomi </label>
        <br>
        <input class="form-control" type="text" name="name" value="<?= $gallery['name'] ?>">
        <br>
        <label>Rasm nomi </label>
        <br> <div >
            <input type="file" name="image" id="confirmPassword" class="form-control-file border" placeholder="Confirm password" required="required"  value="<?= $gallery['image']?> ">
       </div>
        <br>
        <br>
        <label class="text-center">Tafsilot </label>
        <br>
        <input class="form-control" type="text" name="content"  value="<?=$gallery['content']?>">
        <input class="form-control hidden"  type="text" name="id"  value="<?=$gallery['id']?>">

    </div>
    <br>
    <button type="submit" class="btn btn-secondary">Save</button>
</form>
</div>
<script src="../bootstrap-3.3.7/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7/css/bootstrap-datepicker.min.css"></script>

</body>
<head>
    <meta charset="UTF-8">
    <title>JS</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
</html>