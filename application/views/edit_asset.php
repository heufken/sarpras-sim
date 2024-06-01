<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Asset</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php $this->load->view('partials/navbar'); ?>

    <div class="container">
        <h1>Edit Asset</h1>
        <form action="<?php echo base_url('asset/edit/'.$asset['id']); ?>" method="post">
            <div class="form-group">
				<div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $asset['id']; ?>" required>
            </div>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $asset['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <input type="text" class="form-control" id="category" name="category" value="<?php echo $asset['category']; ?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $asset['quantity']; ?>" required>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea class="form-control" id="spesifikasi" name="spesifikasi"><?php echo $asset['spesifikasi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $asset['merk']; ?>">
            </div>
            <div class="form-group">
                <label for="bahan">Bahan</label>
                <input type="text" class="form-control" id="bahan" name="bahan" value="<?php echo $asset['bahan']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_barang">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?php echo $asset['jenis_barang']; ?>">
            </div>
            <div class="form-group">
                <label for="asal_barang">Asal Barang</label>
                <input type="text" class="form-control" id="asal_barang" name="asal_barang" value="<?php echo $asset['asal_barang']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_perolehan">Tanggal Perolehan</label>
                <input type="date" class="form-control" id="tanggal_perolehan" name="tanggal_perolehan" value="<?php echo $asset['tanggal_perolehan']; ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $asset['harga']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
