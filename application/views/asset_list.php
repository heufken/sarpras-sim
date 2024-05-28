<!-- views/asset_list.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Fasilitas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <?php $this->load->view('header'); ?> <!-- Load header view -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('partials/sidebar'); ?>
            </div>
            <div class="container">
                <h1>Data Fasilitas</h1>
                <a href="<?php echo base_url('asset/add'); ?>" class="btn btn-primary mb-3">Add Asset</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Kategori</th>
                            <th>Spesifikasi</th>
                            <th>Merk</th>
                            <th>Bahan</th>
                            <th>Jenis Barang</th>
                            <th>Asal Barang</th>
                            <th>Tanggal Perolehan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($assets as $asset): ?>
                            <tr>
                                <td><?php echo $asset['name']; ?></td>
                                <td><?php echo $asset['category']; ?></td>
                                <td><?php echo $asset['spesifikasi']; ?></td>
                                <td><?php echo $asset['merk']; ?></td>
                                <td><?php echo $asset['bahan']; ?></td>
                                <td><?php echo $asset['jenis_barang']; ?></td>
                                <td><?php echo $asset['asal_barang']; ?></td>
                                <td><?php echo $asset['tanggal_perolehan']; ?></td>
                                <td><?php echo $asset['harga']; ?></td>
                                <td><?php echo $asset['quantity']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('asset/edit/'.$asset['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url('asset/delete/'.$asset['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); ?> <!-- Load footer view -->

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
