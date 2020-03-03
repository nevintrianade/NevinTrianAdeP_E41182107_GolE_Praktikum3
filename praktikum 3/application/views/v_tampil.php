<!DOCTYPE html>
<html>
<head>
	<title>Data user</title> <!-- menampilkan judul  -->
</head>
<body>
	<center><h1>Data User</h1></center> <!-- menampilkan tulisan  -->
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center> <!-- meneruskan input form ke direktori file crud/tambah dengan method post  -->
	<table style="margin:20px auto;" border="1">  <!-- membuat tabel  -->
		<tr>
			<th>Id</th> <!-- membuat label id  -->
			<th>Nama</th> <!-- membuat label nama  -->
			<th>Alamat</th> <!-- membuat label alamat -->
			<th>Pekerjaan</th> <!-- membuat label pekerjaan  -->
			<th>Action</th> <!-- membuat label aksi  -->
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ //mengubah $user menjadi $u
		?>
		<tr>
			<td><?php echo $u->id ?></td>   <!-- menampilkan value dari database ke dalam kolom -->
			<td><?php echo $u->nama ?></td> <!-- menampilkan value dari database ke dalam kolom -->
			<td><?php echo $u->alamat ?></td> <!-- menampilkan value dari database ke dalam kolom -->
			<td><?php echo $u->pekerjaan ?></td> <!-- menampilkan value dari database ke dalam kolom -->
			<td>
				
			    <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?> <!-- menampilkan button edit dan fungsinya -->
                <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?> <!-- menampilkan button hapus dan fungsinya -->
			</td>
		</tr>
		<?php } ?>
    </table>
    <br/>
	<center><?php 
	echo $this->pagination->create_links(); //membuat halaman
	?> </center>
</body>
</html>


