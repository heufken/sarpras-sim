<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>
    
    <form action="<?php echo base_url('pegawai/tambah'); ?>" method="post">
        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>

        <label for="pendidikan">Pendidikan:</label><br>
        <input type="text" id="pendidikan" name="pendidikan" required><br>

        <label for="tahun_masuk">Tahun Masuk:</label><br>
        <input type="text" id="tahun_masuk" name="tahun_masuk" required><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="no_hp">No HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
