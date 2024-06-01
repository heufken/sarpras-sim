<!-- views/kondisi_sarpras_list.php -->

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
                <h1>Daftar Kondisi Sarpras</h1>

                <!-- Tombol untuk menambah data kondisi sarpras -->
                <a href="<?php echo base_url('kondisi_sarpras/add'); ?>" class="btn btn-primary mb-3">Tambah Kondisi Sarpras</a>

                <!-- Tabel untuk menampilkan daftar kondisi sarpras -->
                <table class="table">
                    <thead>
                        <tr>
						    <th>ID</th>
                            <th>ID Sarpras</th>
                            <th>Tanggal Pengecekan</th>
                            <th>Kondisi</th>
                            <th>Ruangan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kondisi_sarpras as $kondisi): ?>
                        <tr>
							<td><?php echo $kondisi['id']; ?></td>
                            <td><?php echo $kondisi['id_sarpras']; ?></td>
                            <td><?php echo $kondisi['tgl_pengecekan']; ?></td>
                            <td><?php echo $kondisi['kondisi']; ?></td>
                            <td><?php echo $kondisi['ruangan']; ?></td>
                            <td><?php echo $kondisi['keterangan']; ?></td>
                            <td>
                                <a href="<?php echo base_url('kondisi_sarpras/edit/'.$kondisi['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?php echo base_url('kondisi_sarpras/delete/'.$kondisi['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
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
