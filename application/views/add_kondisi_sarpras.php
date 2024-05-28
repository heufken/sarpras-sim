<!-- views/add_kondisi_sarpras.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kondisi Sarpras</title>
</head>

<body>
    <h1>Tambah Kondisi Sarpras</h1>
    <form action="<?php echo base_url('kondisi_sarpras/insert'); ?>" method="post">
        <label for="id_sarpras">ID Sarpras:</label><br>
        <input type="text" id="id_sarpras" name="id_sarpras"><br>
        <label for="tgl_pengecekan">Tanggal Pengecekan:</label><br>
        <input type="date" id="tgl_pengecekan" name="tgl_pengecekan"><br>
        <label for="kondisi">Kondisi:</label><br>
        <input type="text" id="kondisi" name="kondisi"><br>
        <label for="ruangan">Ruangan:</label><br>
        <input type="text" id="ruangan" name="ruangan"><br>
        <label for="keterangan">Keterangan:</label><br>
        <input type="text" id="keterangan" name="keterangan"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>