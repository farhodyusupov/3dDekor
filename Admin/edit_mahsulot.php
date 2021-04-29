<?php
$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mahsulot = $db->query("SELECT * FROM mahsulotlar WHERE id = $id")->fetch();
    $kategoriya = $db->query("SELECT * FROM kategoriya ")->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">
<body>

<h3 align="center">Yangilash</h3>
<div style="width: 80% ;padding-left: 20%">
<form action="edit_main1.php?" class="text-center" method="GET">

    <div style="border-width: 10px">
        <br>
        <label>Nomi </label>
        <br>
        <input class="form-control" type="text" name="name" value="<?= $mahsulot['name'] ?>">
        <br>
        <label>Rasm nomi </label>
        <br>
        <div>
            <input type="file" name="image" id="confirmPassword" class="form-control-file border"
                   placeholder="Confirm password" required="required" value="<?= $mahsulot['image'] ?> ">
        </div>
        <br>

        <label class="text-center">Tafsilot </label>
        <input class="form-control" type="text" name="content" value="<?= $mahsulot['content'] ?>">
        <input class="form-control hidden" type="text" name="id" value="<?= $mahsulot['id'] ?>">
        <br>

        <label>Kategoriya</label>
        <br>
        <select name="select1" class="form-control" id="select1">
            <?php foreach ($kategoriya as $array1) : ?>
                <option value="<?= $array1['name'] ?>">
                    <?= $array1['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br>
        <label class="text-center">Tafsilot </label>
        <input class="form-control" type="text" name="content" value="<?= $mahsulot['content'] ?>">
        <input class="form-control hidden" type="text" name="id" value="<?= $mahsulot['id'] ?>">

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