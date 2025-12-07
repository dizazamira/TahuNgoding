<style>
 body {
        background: #f5f5f5;
        padding: 20px;
    }

    h1, h3 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 70%;
        margin: auto;
        border-collapse: collapse;
        background: #dbf0eeff;
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background: #18cda8ff;
        color: white;
        padding: 12px;
    }

    td {
        padding: 12px;
        text-align: center;
    }
</style>

<?php
$produk = [
    ["nama" => "Laptop", "harga" => 8500000, "stok" => 10],
    ["nama" => "Mouse", "harga" => 150000, "stok" => 50],
    ["nama" => "Keyboard", "harga" => 250000, "stok" => 20]
];
?>
<h1>Tabel Multidimensi<h1>
<h3>Daftar Produk:</h3>
<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php foreach ($produk as $p): ?>
        <tr>
            <td><?= $p["nama"] ?></td>
            <td><?= number_format($p["harga"], 0, ',', '.') ?></td>
            <td><?= $p["stok"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
