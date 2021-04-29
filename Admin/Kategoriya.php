<?php

$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$kategoria = $db->query("SELECT * FROM kategoriya ")->fetchAll();
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
                <button type="button" class="btn btn-info btn-lg" ><a href="new_kategoriya.php">Qo'shish</a>
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
                            <li class="active" ><a>Kategoriyalar</a></li>
                            <li ><a href="Mahsulotlar.php">Mahsulotlar</a></li>
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
                <?php foreach ($kategoria as $kategoriyalar): ?>
                    <tr>
                        <td><?php echo $kategoriyalar["id"] ?></td>
                        <td><?php echo $kategoriyalar["name"] ?></td>
                        <td><?php echo $kategoriyalar["image"] ?></td>
                        <td><?php echo $kategoriyalar["content"] ?></td>
                        <td>
                            <a class="btn btn-success" style="font-size: 10px;"
                               href="edit_kategoriya.php?id=<?= $kategoriyalar['id'] ?>">Yangilash </a>
                            <a href="del_kategoriya.php?id=<?= $kategoriyalar['id'] ?>" class="btn btn-danger"
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