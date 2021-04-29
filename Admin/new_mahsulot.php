<?php
$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$kategoriya = $db->query("SELECT * FROM kategoriya ")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<body>


<h3 align="center">Yangi mahsulot qo`shish</h3>
<div style="width: 80% ;padding-left: 20%">
<form action="new_mahsulot1.php?" class="text-center" method="GET">
    <br>
    <label>Nomi </label>
    <br>
    <input class="form-control" type="text" name="name" placeholder="Nomini kiriting">
    <br>
    <label>Rasmni tanlang </label>
    <input type="file" name="image" id="confirmPassword" class="form-control-file border"
           placeholder="Confirm password" required="required">
    <br>
    <label>Tafsilot</label>
    <br>
    <input class="form-control" type="textarea" name="content" placeholder="Tafsilot kiriting">
    <br>
    <label>Kategoriya</label>
    <br>
    <select name="select1" class="form-control" id="select1">
        <?php foreach ($kategoriya as $array1) : ?>
            <option value="<?=$array1['id']?>">
                <?=$array1['name'] ?>
            </option>
        <?php endforeach;?>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Saqlash</button>

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