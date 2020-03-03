<!doctype html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Web Baru</title>	 <!-- menampilkan judul  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
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
					<li><a href="<?php echo base_url().'web/home1' ?>">Home</a></li> <!-- membuat tulisan dengan link -->
					<li><a href="<?php echo base_url().'web/about1' ?>">About</a></li> <!-- membuat tulisan dengan link -->
					<li><a href="<?php echo base_url().'crud' ?>">Data</a></li> <!-- membuat tulisan dengan link -->
					<li><a href="<?php echo base_url().'upload' ?>">Upload</a></li> <!-- membuat tulisan dengan link -->
					<li><a href="<?php echo base_url().'web/download' ?>">Download</a></li> <!-- membuat tulisan dengan link -->
					<li> <a><?php echo $this->session->userdata("nama"); ?></a> </li> <!-- menampilkan session user -->
					<li><a href="<?php echo base_url().'web/login/logout' ?>">Logout</a></li> <!-- membuat tulisan dengan link -->
				
				</ul>
			</nav>
			<div class="clear"></div>
		</header>

	