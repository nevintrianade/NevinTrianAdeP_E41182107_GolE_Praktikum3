<html>
<head>
	<title>Upload file</title> <!-- menampilkan judul  -->
</head>
<center><body>
	<center><h1>Upload file</h1></center> <!-- menampilkan tulisan  -->
	<?php echo $error;?>  <!-- menampilkan error  -->
 
	<?php echo form_open_multipart('upload/aksi_upload');?> <!-- meneruskan ke direktori file upload/aksi_upload  -->
 
	<input type="file" name="berkas" />  <!-- menampilkan button upload file yang akan menuju ke explore  -->
 
	<br /><br /> <!-- membuat space atau enter  -->
 
	<input type="submit" value="upload" /> <!-- menampilkan button upload  -->
 
</form>
 
</body></center>
</html>


