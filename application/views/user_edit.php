<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data User</title>
</head>

<body>
    <center>
        <h2>Form Edit Data User</h2>
        <form method="post" action="<?= base_url('user/update'); ?>">
            <input type="hidden" name="id" value="<?= $user->id; ?>">
            <table border="1">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" value="<?= $user->nama; ?>" name="nama"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" value="<?= $user->username; ?>" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" value="<?= $user->password; ?>" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="ubah" value="Ubah Data"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>