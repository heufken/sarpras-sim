<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        #wrapper header {
            background-image: url('<?php echo base_url() ?>assets/header.jpg'); /* Mengubah path gambar */
            background-size: 50%; /* Mengatur gambar background agar menutupi seluruh area header */
            background-position: center; 
            color: white; /* Mengatur warna teks */
            padding: 20px; /* Mengatur padding untuk memberikan ruang agar teks tidak bertabrakan dengan background */

            
            /* text-align: center; */
        }

        #main button.openbtn {
            float: left; /* Mengatur tombol ke kiri */
            margin-right: 10px; /* Memberikan margin ke tombol agar tidak terlalu dekat dengan konten lain */
        }
    </style>
</head>

<body>
	<div id="wrapper">
	
		<header>
	
			<center>
				<strong>
				<h1 style="color: white;">WISE BMD</h1>
				<h2 style="color: white;">Web-based Intelligent School Environment Budi Mulia Dua Elementary School Panjen</h2>
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
				<a href="<?php echo base_url() . 'asset' ?>">DATA SARPRAS</a>
				<a href="<?php echo base_url() . 'kondisi_sarpras' ?>">DATA PENGECEKAN</a>
				<a href="<?php echo base_url() . 'pegawai' ?>">DATA PEGAWAI</a>
				</center>
			</div>

			<div id="main">
				<button class="openbtn" onclick="openNav()">☰</button>
			</div>

			<nav>
				<ul>
					<li><a href="<?php echo base_url() . 'homepage2' ?>" style="color: white;">Home</a></li>
					<li><a href="<?php echo base_url() . 'Homepage/login' ?>" style="color: white;">Login</a></li>
					<li><a href="<?php echo base_url() . 'about' ?>" style="color: white;">About</a></li>
					<li><a href="<?php echo base_url() . 'userlogout' ?>" style="color: white;">Logout</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>