<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web Baru</title>	 <!-- menampilkan judul  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"> <!-- memanggil css -->
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>Web Baru</h1> <!-- menampilkan tulisan  -->
				<h3>ini web baru</h3> <!-- menampilkan tulisan  -->
			</hgroup>
			<nav>
				<ul>
                    
					<li><a href="<?php echo base_url().'web' ?>">Home</a></li> <!-- membuat tulisan dengan link -->
                    <li><a href="<?php echo base_url().'web/about' ?>">About</a></li> <!-- membuat tulisan dengan link -->
                    <li><a href="<?php echo base_url().'web/login' ?>">Login</a></li> <!-- membuat tulisan dengan link -->
				</ul>
			</nav>
			<div class="clear"></div>
		</header>