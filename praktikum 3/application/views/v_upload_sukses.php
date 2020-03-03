<html>
<head>
	<title>Upload sukses<</title> <!-- menampilkan judul  -->
</head>
<center><body>
 
	<center><h1>Upload sukses</h1></center> <!-- menampilkan tulisan  -->
 
	<ul>
		<?php foreach ($upload_data as $item => $value):?> <!-- mengubah $item menjadi $value -->
			<li><?php echo $item;?>: <?php echo $value;?></li> <!-- menampilkan item dan value -->
		<?php endforeach; ?>
	</ul>	
 
</body> </center>
</html>