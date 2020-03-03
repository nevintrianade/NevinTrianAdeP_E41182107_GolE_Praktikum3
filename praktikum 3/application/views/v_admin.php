<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title> <!-- menampilkan judul -->
</head>
<center> <body>
	<h1>Login berhasil !</h1> <!-- menampilkan tulisan -->
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2> <!-- menampilkan tulisan dan session -->
</body> </center>
</html>
</br>