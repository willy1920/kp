<?php
	class Tampil{		
		public function tampilHasilPro($data){
			echo "<p>Hasil :</p><br><div id='hasil'>";
			$tmp = 0;
			for ($i=0; $i < $data['length']; $i++) { 
				if ($tmp < $data[$i][2]) {
					$tmp=$data[$i][2];
					$nama=$data[$i][1];
				}
			}
			echo $nama;
		}
	}
?>