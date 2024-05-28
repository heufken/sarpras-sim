<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div id="wrapper">
		<header>
			<center>
				<strong>
				<h1 style="color: white;">APLIKASI SARANA DAN PRASARANA</h1>
				<h3 style="color: white;">BUDI MULIA DUA ELEMENTARY SCHOOL YOGYAKARTA</h3>
				</strong>
			</center>
			<!-- <hgroup>
				<button class="openbtn openbtn1" style="color: white;" onclick="openNav()">☰</button>
			</hgroup> -->

			<div id="mySidebar" class="sidebar">
				<div class="sidebar-header">
					<strong>OPSI</strong>
					<button class="closebtn" onclick="closeNav()">×</button>
				</div>
				<center>
				<a href="<?php echo base_url() . 'user/show' ?>">USER</a>
				<a href="<?php echo base_url() . 'asset' ?>">DATA</a>
				<a href="<?php echo base_url() . 'kondisi_sarpras' ?>">KONDISI</a>
				<a href="<?php echo base_url() . 'pegawai' ?>">PENGELOLA</a>
				</center>
			</div>

			<div id="main">
				<button class="openbtn" onclick="openNav()">☰</button>
			</div>

			<nav>
				<ul>
					<li><a href="<?php echo base_url() . 'homepage2' ?>" style="color: white;">Home</a></li>
					<li><a href="<?php echo base_url() . 'Homepage/login' ?>" style="color: white;">Login</a></li>
					<li><a href="<?php echo base_url() . '' ?>" style="color: white;">Service</a></li>
					<li><a href="<?php echo base_url() . '' ?>" style="color: white;">Contact</a></li>
					<li><a href="<?php echo base_url() . 'userlogout' ?>" style="color: white;">Logout</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>