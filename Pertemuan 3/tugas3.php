<?php
$biodata = [
    "nama" => "Didi",
    "umur" => 18,
    "fakultas" => "Fakultasi Teknologi Informasi",
    "prodi" => "Informatika"
];
echo "<h1>Array Asosiatif</h1>";
echo "<h3>Biodata:</h3>";
foreach ($biodata as $key => $value) {
    echo ucfirst($key) . ": $value <br>";
}
?>
