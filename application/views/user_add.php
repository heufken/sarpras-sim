<section>
	<div id="content">
			<h2>Form Tambah User</h2>
			<form method="post" action="<?= base_url('user/save'); ?>">
				<table border="1">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="kirim" value="Save"></td>
					</tr>
				</table>
			</form>
	</div>
</section> 