<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Presensi</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>

<form action="presensi_post.php" method = "POST">
<h3>Form Presensi</h3>

<input type="text" name="nama" placeholder="Nama" required/>
<input type="number" name="nim" placeholder="NIM" required/>

<select name="status" requaired>
    <option value="">Pilih Status Kehadiran</option>
    <option value="hadir">Hadir</option>
    <option value="izin">Izin</option>
    <option value="sakit">Sakit</option>
</select>

<button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>