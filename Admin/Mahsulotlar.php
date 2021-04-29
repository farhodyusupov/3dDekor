<?php

$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$mahsulot = $db->query("SELECT * FROM mahsulotlar ")->fetchAll();
$kategoriya = $db->query("SELECT * FROM kategoriya ")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>
<h3 align="center">ADMIN PANEL</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-right">
                <button type="button" class="btn btn-info btn-lg" ><a href="new_mahsulot.php">Qo'shish</a>
                </button>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="Admin.php">Rasmlar</a></li>
                            <li ><a href="Hamkorlar.php">Hamkorlar</a></li>
                            <li ><a href="Kategoriya.php">Kategoriyalar</a></li>
                            <li class="active" ><a>Mahsulotlar</a></li>
                            <li ><a href="Main_kat.php">Asosiy kategoriya</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered" id="mainTable">
                <thead>
                <th>№</th>
                <th>Nomi</th>
                <th>Rasm nomi</th>
                <th>Tafsiloti</th>
                <th>Amallar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($mahsulot as $mahsulotlar): ?>
                    <tr>
                        <td><?php echo $mahsulotlar["id"] ?></td>
                        <td><?php echo $mahsulotlar["name"] ?></td>
                        <td><?php echo $mahsulotlar["image"] ?></td>
                        <td><?php echo $mahsulotlar["content"] ?></td>
<!--                        <td>--><?php //echo $mahsulotlar["kategoriya_id"] ?><!--</td>-->
                        <td>
                            <a class="btn btn-success" style="font-size: 10px;"
                               href="edit_mahsulot.php?id=<?= $mahsulotlar['id'] ?>">Yangilash </a>
                            <a href="del_mahsulot.php?id=<?= $mahsulotlar['id'] ?>" class="btn btn-danger"
                               style="font-size: 10px; onclick=" del()" >O'chirish</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script src="../bootstrap-3.3.7/css/bootstrap-datepicker.min.css"></script>
<script src="..//bootstrap-3.3.7/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>

</body>
</html>