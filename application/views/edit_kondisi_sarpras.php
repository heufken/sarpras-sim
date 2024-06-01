<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kondisi Sarpras</title>
</head>
<body>
    <h1>Edit Kondisi Sarpras</h1>
    
    <form action="<?php echo base_url('kondisi_sarpras/update/'.$kondisi_sarpras['id']); ?>" method="post">
        <label for="id_sarpras">ID Sarpras:</label><br>
        <input type="text" id="id_sarpras" name="id_sarpras" value="<?php echo $kondisi_sarpras['id_sarpras']; ?>" required><br>

        <label for="tgl_pengecekan">Tanggal Pengecekan:</label><br>
        <input type="date" id="tgl_pengecekan" name="tgl_pengecekan" value="<?php echo $kondisi_sarpras['tgl_pengecekan']; ?>" required><br>

        <label for="kondisi">Kondisi:</label><br>
        <input type="text" id="kondisi" name="kondisi" value="<?php echo $kondisi_sarpras['kondisi']; ?>" required><br>

        <label for="ruangan">Ruangan:</label><br>
        <input type="text" id="ruangan" name="ruangan" value="<?php echo $kondisi_sarpras['ruangan']; ?>" required><br>

        <label for="keterangan">Keterangan:</label><br>
        <input type="text" id="keterangan" name="keterangan" value="<?php echo $kondisi_sarpras['keterangan']; ?>" required><br><br>
		
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
