<!DOCTYPE html>
<html>
<head>
	<title>Sistem Penunjang Keputusan</title>
	<link rel="stylesheet" type="text/css" href="public/w3.css">
	<link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<body>
	<header class="w3-card-16">SPK Pemilihan Notebook Dan Netbook ASUS</header>
	<div class="isi">
		<div class="pilih">
			<p>Pilih Notebook atau Netbook yang akan dibandingkan :</p><br>
			<form method="POST" action="#">
				<table>
					<?php
						include 'configuration/main.php';
						$input = new controller;
						$input->dashboardPilihLaptop();
					?>
				</table>
				<div>
					<p>Tentukan nilai prioritas spesifikasi :</p>
					<table>
						<tr>
							<td>Processor</td>
							<td>
								<input type="radio" name="processor" value="1"><label>1</label>
								<input type="radio" name="processor" value="2"><label>2</label>
								<input type="radio" name="processor" value="3"><label>3</label>
								<input type="radio" name="processor" value="4"><label>4</label>
								<input type="radio" name="processor" value="5"><label>5</label>
							</td>
						</tr>
						<tr>
							<td>VGA</td>
							<td>
								<input type="radio" name="vga" value="1"><label>1</label>
								<input type="radio" name="vga" value="2"><label>2</label>
								<input type="radio" name="vga" value="3"><label>3</label>
								<input type="radio" name="vga" value="4"><label>4</label>
								<input type="radio" name="vga" value="5"><label>5</label>
							</td>
						</tr>
						<tr>
							<td>RAM</td>
							<td>
								<input type="radio" name="ram" value="1"><label>1</label>
								<input type="radio" name="ram" value="2"><label>2</label>
								<input type="radio" name="ram" value="3"><label>3</label>
								<input type="radio" name="ram" value="4"><label>4</label>
								<input type="radio" name="ram" value="5"><label>5</label>
							</td>
						</tr>
						<tr>
							<td>HDD</td>
							<td>
								<input type="radio" name="hdd" value="1"><label>1</label>
								<input type="radio" name="hdd" value="2"><label>2</label>
								<input type="radio" name="hdd" value="3"><label>3</label>
								<input type="radio" name="hdd" value="4"><label>4</label>
								<input type="radio" name="hdd" value="5"><label>5</label>
							</td>
						</tr>
						<tr>
							<td>Ukuran</td>
							<td>
								<input type="radio" name="ukuran" value="1"><label>1</label>
								<input type="radio" name="ukuran" value="2"><label>2</label>
								<input type="radio" name="ukuran" value="3"><label>3</label>
								<input type="radio" name="ukuran" value="4"><label>4</label>
								<input type="radio" name="ukuran" value="5"><label>5</label>
							</td>
						</tr>
					</table>
				</div>
				<button class="w3-btn w3-cyan" onclick="result()">Send</button>
			</form>
			<?php
				include 'process/hasil.php';
			?>	
		</div>
		<p>List Notebook dan Netbook :</p>
		<table class="w3-table w3-striped w3-centered w3-hoverable">
			<tr class="w3-cyan">
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
	<footer>@2017 By Apriadi Wijaya - 152101523</footer>
</body>
</html>