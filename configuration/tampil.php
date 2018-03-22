<?php
	/**
	* 
	*/
	class Tampil
	{
		
		public function tampilHasilPro($data){
			echo "<table>";
			for ($i=0; $i < $data['length']; $i++) { 
				?>
				<tr>
					<?php 
					for ($j=0; $j <= $data['bound']; $j++) { 
						echo '<td>'.$data[$i][$j].'</td>';
					}
					?>
				</tr>
				<?php
			}
		}
	}
?>