<!DOCTYPE html>
<html>
<head>
	<title>Tambah data user</title> <!-- menampilkan judul  -->
</head>
<body>
	<center>
		<h1>Tambah data user</h1> <!-- menampilkan tulisan  -->
		
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post"> <!-- meneruskan input form ke direktori file crud/tambah_aksi dengan method post  -->
		<table style="margin:20px auto;"> <!-- membuat tabel  -->
			<tr>
				<td>Nama</td> <!-- membuat kolom nama  -->
				<td><input type="text" name="nama"></td> <!-- membuat input text nama -->
			</tr>
			<tr>
				<td>Alamat</td> <!-- membuat kolom alamat  -->
				<td><input type="text" name="alamat"></td> <!-- membuat input text alamat -->
			</tr>
			<tr>
				<td>Pekerjaan</td> <!-- membuat kolom pekerjaan  -->
				<td><input type="text" name="pekerjaan"></td> <!-- membuat input text pekerjaan -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td> <!-- membuat button simpan  -->
			</tr>
		</table>
	</form>	
</body>
</html>