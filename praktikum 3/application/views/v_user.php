<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title> <!-- menampilkan judul  -->
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1> <!-- menampilkan tulisan  -->
	<table border="1"> <!-- membuat tabel  -->
		<tr>
			<th>Nama</th>  <!-- membuat label bernama nama  -->
			<th>Alamat</th> <!-- membuat label bernama alamat  -->
			<th>Pekerjaan</th> <!-- membuat label bernama pekerjaan  -->
		</tr>
		<?php foreach($user as $u){ ?> <!-- mengubah $user menjadi $u -->
		<tr>
			<td><?php echo $u->nama ?></td> <!-- menampilkan value dari database ke dalam kolom -->
			<td><?php echo $u->alamat ?></td> <!-- menampilkan value dari database ke dalam kolom -->
			<td><?php echo $u->pekerjaan ?></td>  <!-- menampilkan value dari database ke dalam kolom -->
		</tr>
		<?php } ?>
	</table>
</body> 
</html> 