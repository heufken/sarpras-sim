<section>
	<div id="content">
		<h2>Data User</h2>
		<a href="<?= base_url('user/add'); ?>">Tambah User</a>
		<a href="<?= base_url('userlogout'); ?>">Logout</a>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Username</td>
				<td colspan="2"><center>Opsi</center></td>
			</tr>
			<?php
			foreach ($users->result() as $i => $user)
			{
				?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $user->nama; ?></td>
					<td><?= $user->username; ?></td>
					<td><a href="<?= base_url('user/edit/'.$user->id); ?>">Ubah</a></td>
					<td><a href="<?= base_url('user/delete/'.$user->id); ?>">Hapus</a></td>
				</tr>
				<?php
			}?>
		</table>
	</div>
</section>
