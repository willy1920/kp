<!DOCTYPE html>
<html>
<head>
	<title>Sistem Penunjang Keputusan</title>
	<link rel="stylesheet" type="text/css" href="public/w3.css">
	<link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<body>
	<header class="w3-card-16">SPK Pemilihan Laptop ASUS</header>
	<div class="isi">
		<div class="pilih">
			<p>Pilih laptop yang akan dibandingkan :</p><br>
			<form method="POST" action="#">
				<table>
					<?php
						include 'configuration/main.php';
						$input = new controller;
						$input->dashboardPilihLaptop();
					?>
				</table>
				<button class="w3-btn w3-blue">Send</button>
			</form>
			<?php
				include 'process/hasil.php';
			?>	
		</div>
		<p>List laptop :</p>
		<table class="w3-table w3-striped w3-centered w3-hoverable">
			<tr class="w3-blue">
				<td>No.</td>
				<td>Tipe</td>
				<td>Processor</td>
				<td>VGA</td>
				<td>RAM</td>
				<td>HDD</td>
				<td>Ukuran</td>
			</tr>
			<?php
				$input->tampilTable();
			?>
		</table>
	</div>
	<footer>@2018 By Apriadi Wijaya & Willy</footer>
</body>
</html>