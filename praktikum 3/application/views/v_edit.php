<!DOCTYPE html>
<html>
<head>
	<title>Edit data user</title> <!-- menampilkan judul  -->
</head>
<body>
	<center>
		<h1>Edit data user</h1> <!-- menampilkan tulisan  -->
	
	</center>
	<?php foreach($user as $u){ ?> <!-- mengubah $user menjadi $u  -->
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post"> <!-- meneruskan input form ke direktori file crud/update dengan method post  -->
		<table style="margin:20px auto;"> <!-- membuat tabel  -->
			<tr>
				<td>Nama</td> <!-- membuat kolom nama  -->
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>"> <!-- menampilkan value dari database ke dalam kolom -->
					<input type="text" name="nama" value="<?php echo $u->nama ?>"> <!-- menampilkan value dari database ke dalam kolom -->
				</td>
			</tr>
			<tr>
				<td>Alamat</td> <!-- membuat kolom alamat  -->
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td> <!-- menampilkan value dari database ke dalam kolom -->
			</tr>
			<tr>
				<td>Pekerjaan</td> <!-- membuat kolom pekerjaan -->
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td> <!-- menampilkan value dari database ke dalam kolom -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td> <!-- button simpan  -->
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>