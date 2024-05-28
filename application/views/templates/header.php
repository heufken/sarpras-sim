<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
	<body>
		<div id="wrapper">
			<header>
				<center>
				<h1>APLIKASI SARANA DAN PRASARANA</H1>
				<h3>BUDI MULIA DUA ELEMENTARY SCHOOL YOGYAKARTA</h3>
				</center>
			<hgroup>
			
				<button class="openbtn" onclick="openNav()">☰</button>
			<hgroup>
					<script>
						function openNav() {
						document.getElementById("mySidebar").style.width = "250px";
						document.getElementById("mySidebar").style.display = "block";
						}

						function closeNav() {
						document.getElementById("mySidebar").style.width = "0";
						document.getElementById("mySidebar").style.display = "block";
						}
					</script>
				</hgroup>
				<nav>
					<ul>
						<li><a href="<?php echo base_url().'homepage2' ?>">Home</a></li>
						<li><a href="<?php echo base_url().'userlogout' ?>">Logout</a></li>
						<li><a href="<?php echo base_url().'' ?>">Service</a></li>
						<li><a href="<?php echo base_url().'' ?>">Contact</a></li>
					</ul>
				</nav>
				<div class="clear"></div>


			</header>