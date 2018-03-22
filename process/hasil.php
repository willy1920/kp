<link rel="stylesheet" type="text/css" href="../public/style.css">
<?php
	$dbUser = "root";
	$dbHost = "localhost";
	$dbName = "kp";
	$dbPass = "";

	$connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

	
	if (!empty($_POST['pilih'])) {
		$jumlah = count($_POST['pilih']);
		$pilih = array();
		foreach ($_POST['pilih'] as $check) {
			array_push($pilih, $check);
    	}
    	//prepare sql data to select multiple records
		$select = "(";
		for ($i=0; $i < count($pilih); $i++) { 
			if ($i == count($pilih)-1) {
				$select .= $pilih[$i].")";
			}
			else{
				$select .= $pilih[$i].",";
			}
		}

		$sql = "SELECT * FROM nilai WHERE id IN $select";
		$query = $connection->query($sql);

		$data = array();
		for ($i=0; $i < $query->num_rows; $i++) { 
			array_push($data, array());
		}

		$j = 0;
		while ($row = $query->fetch_array(MYSQLI_NUM)) {
			for ($i=0; $i < count($row); $i++) { 
				array_push($data[$j], $row[$i]);
			}
			$j++;
		}
		$data['bound'] = 2;
		$data['length'] = $j;
		
		$ai = new Ai;
		$tampil = new Tampil;
		
		$tampil->tampilHasilPro($ai->promethee($data));
		//end prepare sql data
	}else{
		$jumlah = 0;
	}



	//variabel yang akan dikirim ke class AI
	$tmp = array();

	//$sql = "SELECT * FROM nilai WHERE"
	/*for ($i=0; $i < $jumlah; $i++) { 
		array_push($tmp, array());
		for ($a=1; $a <= 29; $a++) { 
			$sql = "SELECT * FROM nilai WHERE id=$a";
			$result = $connection->query($sql);
			$d = $result->fetch_array();
			if ($laptop[$i] == $d['tipe']) {
				$processor[$i]=$d['processor'];
				$vga[$i]=$d['vga'];
				$ram[$i]=$d['ram'];
				$hdd[$i]=$d['hdd'];
				$ukuran[$i]=$d['ukuran'];
			}
		}
	}*/

	if(empty($_POST['processor']) || empty($_POST['vga']) || empty($_POST['ukuran']) || empty($_POST['hdd']) || empty($_POST['ram'])){
		echo "Tolong pilih Notebook atau Netbook yang akan dibandingkan dan tentukan nilai prioritas";
	}else{
		$nilaiProcessor = $_POST['processor'];
		$nilaiVga = $_POST['vga'];
		$nilaiRam = $_POST['ram'];
		$nilaiHdd = $_POST['hdd'];
		$nilaiUkuran = $_POST['ukuran'];

		$bobotProcessor = $nilaiProcessor / ($nilaiProcessor+$nilaiUkuran+$nilaiHdd+$nilaiRam+$nilaiVga);
		$bobotVga = $nilaiVga / ($nilaiProcessor+$nilaiUkuran+$nilaiHdd+$nilaiRam+$nilaiVga);
		$bobotRam = $nilaiRam / ($nilaiProcessor+$nilaiUkuran+$nilaiHdd+$nilaiRam+$nilaiVga);
		$bobotHdd = $nilaiHdd / ($nilaiProcessor+$nilaiUkuran+$nilaiHdd+$nilaiRam+$nilaiVga);
		$bobotUkuran = $nilaiUkuran / ($nilaiProcessor+$nilaiUkuran+$nilaiHdd+$nilaiRam+$nilaiVga);

		for ($i=0; $i < $jumlah; $i++) { 
			$s[$i] = exp($bobotProcessor * log($processor[$i])) * exp($bobotVga * log($vga[$i])) * exp($bobotRam * log($ram[$i])) * exp($bobotHdd * log($hdd[$i])) * exp($bobotUkuran * log($ukuran[$i]));
		}

		echo "<p>Hasil :</p><br><div id='hasil'>";

		for ($i=0; $i < $jumlah; $i++) { 
			if (max($s)==$s[$i]) {
				echo $laptop[$i]."<br>";
			}
		}

		echo "</div>";
	}
?>