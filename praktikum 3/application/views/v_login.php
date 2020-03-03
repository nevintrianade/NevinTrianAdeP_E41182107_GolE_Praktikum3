<!DOCTYPE html>
<html>
<head>
	<title>Login</title> <!-- menampilkan judul  -->
</head>
<center><body>
	<h1>Login Admin</h1> <!-- menampilkan tulisan  -->
	<?php echo validation_errors(); ?> <!-- membuat validasi form  -->
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post"> <!-- meneruskan input form ke direktori file login/aksi_login dengan method post  -->		
		<table> <!-- membuat form -->
			<tr>
				<td>Username</td> <!-- membuat label bernama username  -->
				<td><input type="text" name="username"></td> <!-- membuat input text username -->
			</tr>
			<tr>
				<td>Password</td> <!-- membuat label bernama password  -->
				<td><input type="password" name="password"></td> <!-- membuat input text password -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td> <!-- membuat button login -->
			</tr>
		</table>
	</form>
</body> </center>
</html>
</br>