<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
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
                <h1>Daftar Pegawai</h1>
                
                <!-- Tombol untuk menambah data pegawai -->
                <a href="<?php echo base_url('pegawai/tambah'); ?>" class="btn btn-primary mb-3">Tambah Pegawai</a>

                <!-- Tabel untuk menampilkan daftar pegawai -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Pendidikan</th>
                            <th>Tahun Masuk</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pegawai as $pgw): ?>
                        <tr>
                            <td><?php echo $pgw['nama_lengkap']; ?></td>
                            <td><?php echo $pgw['tanggal_lahir']; ?></td>
                            <td><?php echo $pgw['tempat_lahir']; ?></td>
                            <td><?php echo $pgw['pendidikan']; ?></td>
                            <td><?php echo $pgw['tahun_masuk']; ?></td>
                            <td><?php echo $pgw['alamat']; ?></td>
                            <td><?php echo $pgw['email']; ?></td>
                            <td><?php echo $pgw['no_hp']; ?></td>
                            <td>
                                <a href="<?php echo base_url('pegawai/edit/'.$pgw['id_pegawai']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?php echo base_url('pegawai/hapus/'.$pgw['id_pegawai']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
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
