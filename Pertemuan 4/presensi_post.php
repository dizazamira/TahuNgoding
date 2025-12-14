<?php

$nama   = ($_POST['nama']);
$nim    = ($_POST['nim']);
$status = ($_POST['status']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Presensi</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="box">
    <h3 align="center">Data Absensi</h3>
    <p><b>Nama  :</b> <?= $nama ?></p>
    <p><b>NIM   :</b> <?= $nim ?></p>
    <p><b>Status:</b> <?= $status ?></p>

    <a href="presensi.php">Kembali</a>
</div>

</body>
</html>
