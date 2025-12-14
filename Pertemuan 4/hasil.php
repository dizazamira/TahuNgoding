<?php

$tugas = $_POST['tugas'];
$uts   = $_POST['uts'];
$uas   = $_POST['uas'];

$nilai_akhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

if ($nilai_akhir >= 85) {
    $grade = "A";
} else if ($nilai_akhir >= 75) {
    $grade = "B";
} else if ($nilai_akhir >= 65) {
    $grade = "C";
} else {
    $grade = "D";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./style.css">
<title>Hasil Penghitungan</title>
</head>

<body>

<div class="box">
    <h3>Hasil Nilai</h3>
    <p>Nilai Tugas : <?= $tugas ?></p>
    <p>Nilai UTS : <?= $uts ?></p>
    <p>Nilai UAS : <?= $uas ?></p>
    <hr>
    <p><b>Nilai Akhir :</b> <?= number_format($nilai_akhir, 2) ?></p>
    <p><b>Grade :</b> <?= $grade ?></p>

    <a href="penghitungan.php">Hitung Ulang</a>
</div>

</body>
</html>
