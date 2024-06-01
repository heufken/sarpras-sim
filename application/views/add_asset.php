<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Sarpras</title>
</head>
<body>
  <h1>Tambah Sarpras</h1>
  <form action="<?php echo base_url('asset/add'); ?>" method="post">
	<label for="id">ID:</label><br>
    <input type="text" id="id" name="id" required><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="category">Category:</label><br>
    <input type="text" id="category" name="category" required><br>
    <label for="quantity">Jumlah:</label><br>
    <input type="number" id="quantity" name="quantity" required><br>
    <label for="spesifikasi">Spesifikasi:</label><br>
    <input type="text" id="spesifikasi" name="spesifikasi"><br>
    <label for="merk">Merk:</label><br>
    <input type="text" id="merk" name="merk"><br>
    <label for="bahan">Bahan:</label><br>
    <input type="text" id="bahan" name="bahan"><br>
    <label for="jenis_barang">Jenis Barang:</label><br>
    <input type="text" id="jenis_barang" name="jenis_barang"><br>
    <label for="asal_barang">Asal Barang:</label><br>
    <input type="text" id="asal_barang" name="asal_barang"><br>
    <label for="tanggal_perolehan">Tanggal Perolehan:</label><br>
    <input type="date" id="tanggal_perolehan" name="tanggal_perolehan"><br>
    <label for="harga">Harga:</label><br>
    <input type="number" id="harga" name="harga"><br><br>
    <input type="submit" value="Add">
  </form>
</body>
</html>
