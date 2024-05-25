<!-- views/user_add.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form action="<?= base_url('user/create'); ?>" method="post">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="username" placeholder="Username">
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
