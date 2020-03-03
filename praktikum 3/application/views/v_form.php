<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title> <!-- menampilkan judul  -->
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1> <!-- menampilkan tulisan  -->
	<?php echo validation_errors(); ?> <!-- fungsi validasi error -->
	<?php echo form_open('form/aksi'); ?>  <!-- meneruskan ke direktori file form/aksi -->
		<label>Nama</label><br/> <!-- membuat label nama -->
		<input type="text" name="nama"><br/> <!-- membuat form input nama -->
		<label>Email</label><br/> <!-- membuat label email -->
		<input type="text" name="email"><br/>  <!-- membuat form input email -->
		<label>Konfirmasi Email</label><br/> <!-- membuat label konfirmasi email -->
		<input type="text" name="konfir_email"><br/><!-- membuat form input konfirmasi email -->
		<input type="submit" value="Simpan"> <!-- membuat button submit -->
	</form>
</body>
</html>