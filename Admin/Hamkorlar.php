<?php

$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$hamkorlar = $db->query("SELECT * FROM hamkorlar ")->fetchAll();
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
                <button type="button" class="btn btn-info btn-lg" ><a href="new_hamkor.php">Qo'shish</a>
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
                            <li ><a href="Admin.php">Rasmlar</a></li>
                            <li class="active"><a>Hamkorlar</a></li>
                            <li ><a href="Kategoriya.php">Kategoriyalar</a></li>
                            <li ><a href="Mahsulotlar.php">Mahsulotlar</a></li>
                            <li ><a href="Main_kat.php">Asosiy kategoriya</a></li>

                        </ul>
                    </div>
                </div>
        </nav>
    </div>
</div>
</div>
<!---->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered" id="mainTable">
                <thead>
                <th>№</th>
                <th>Nomi</th>
                <th>Telefon nomeri</th>
                <th>Addresi</th>
                <th>Amallar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($hamkorlar as $hamkolrar1): ?>
                    <tr>
                        <td><?php echo $hamkolrar1["id"] ?></td>
                        <td><?php echo $hamkolrar1["name"] ?></td>
                        <td><?php echo $hamkolrar1["phone_number"] ?></td>
                        <td><?php echo $hamkolrar1["addres"] ?></td>
                        <!--                        <td>--><?php //echo $taom["tafsiloti"]?><!--</td>-->
                        <!--                        <td>--><?php //echo $taom["miqdori"]?><!--</td>-->
                        <!--                        <td>--><?php //echo $taom["narxi"]?><!--</td>-->
                        <td>
                            <a class="btn btn-success" style="font-size: 10px;"
                               href="edit_hamkor.php?id=<?= $hamkolrar1['id'] ?>">Yangilash </a>
                            <a href="del_hamkor.php?id=<?= $hamkolrar1['id'] ?>" class="btn btn-danger"
                               style="font-size: 10px; onclick=" del()" >O'chirish</a>
<!--                            <script> var text =  + " ni ma'lumotlarini o'chirishni tasdiqlaysizmi?";-->
<!--                                var ans = confirm(text);-->
<!--                                if(ans){-->
<!--                                    <a></a>-->
<!--                                }-->
<!--                            </script>-->
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!---->

<!-- Modal -->
<div id="addForm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->


        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Yangi rasm qo'shish</h4>
            </div>
            <div class="modal-body">

                <div class="form">
                    <form action="new_image1.php" method="get" enctype="multipart/form-data">
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
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </div>
        </form>
    </div>

</div>
</div>

<script src="../bootstrap-3.3.7/css/bootstrap-datepicker.min.css"></script>
<script src="..//bootstrap-3.3.7/js/jquery.min.js" type="text/javascript"></script>
<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>

</body>
</html>