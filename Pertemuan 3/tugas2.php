<?php
$mahasiswa = ["Lala", "Budi", "Zahra", "Andi", "Citra"];
echo "<h1>Sorting</h1>";
echo "<h3>Sebelum Sorting:</h3>";
print_r($mahasiswa);

sort($mahasiswa);

echo "<h3>Sesudah Sorting:</h3>";
print_r($mahasiswa);
?>
