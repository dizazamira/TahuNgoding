<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./style.css">
<title>Form Penghitungan Nilai</title>
</head>

<body>

<form action="hasil.php" method="POST">
    <h3>Hitung Nilai Akhir</h3>

    <input type="number" name="tugas" placeholder="Nilai Tugas" required>
    <input type="number" name="uts" placeholder="Nilai UTS" required>
    <input type="number" name="uas" placeholder="Nilai UAS" required>

    <button type="submit">Hitung</button>
</form>

</body>
</html>
