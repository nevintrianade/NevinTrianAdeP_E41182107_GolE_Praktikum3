<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat View Pada CodeIgniter | MalasNgoding.com</title> <!-- menampilkan judul  -->
</head>
<body>
  <center>  <h2><?php echo $judul; ?></h2> <!-- menampilkan judul yang sudah dideklarasikan   -->
    <h3><?php echo $tutorial; ?></h3> </center> <!-- menampilkan tutorial yang sudah dideklarasikan  -->

    <?php 
    echo br(5); //menampilkan space atau enter
    echo img("pic/flowchart.jpg"); //menampilkan gambar
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",1); //menampilkan helper h1
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",2); //menampilkan helper h2
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",3); //menampilkan helper h3
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",4); //menampilkan helper h4
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",5); //menampilkan helper h5
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",6); //menampilkan helper h6
	?>
</body>
</html>