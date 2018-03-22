<?php
	/**
	* 
	*/
	class AI{
		public function promethee($data){
			$net = array();
			$leavingFlow = array();
			$enteringFlow = array();
			$tmp = 0;
			$tmp1 = 0;
			$tmpLeaving = 0;
			$tmpEntering = 0;
			for ($i=0; $i < $data['length']; $i++) { 
				for ($j=0; $j < $data['length']; $j++) { 
					for ($k=$data['bound']; $k < count($data[0]); $k++) { 
						if ($data[$i][$k] - $data[$j][$k] > 0) {
							$tmp++;
						}
					}
					for ($l=$data['bound']; $l < count($data[0]); $l++) { 
						if ($data[$j][$l] - $data[$i][$l] > 0) {
							$tmp1++;
						}
					}
					$tmpLeaving += (1/(count($data[0]) - $data['bound'])) * $tmp;
					$tmpEntering += (1/(count($data[0]) - $data['bound'])) * $tmp1;
					$tmp = 0;
					$tmp1 = 0;
				}
				array_push($leavingFlow, (1/($data['length']-1)*$tmpLeaving));
				array_push($enteringFlow, (1/($data['length']-1)*$tmpEntering));
				$tmpLeaving = 0;
				$tmpEntering = 0;
			}

			for ($i=0; $i < count($leavingFlow); $i++) {
				array_push($net, array());
				for ($j=0; $j < $data['bound']; $j++) { 
					array_push($net[$i], $data[$i][$j]);
				}
				array_push($net[$i], $leavingFlow[$i]-$enteringFlow[$i]);
			}
			$net['length'] = $data['length'];
			$net['bound'] = $data['bound'];

			return $this->highToLow($net);
			unset($net, $leavingFlow, $enteringFlow, $tmp, $tmp1, $tmpLeaving, $tmpEntering);

		}

		private function highToLow($data){
			$tmp = array();

			for ($i=0; $i < $data['length']; $i++) { 
				for ($j=$i+1; $j < $data['length']; $j++) { 

					if ($data[$i][$data['bound']] < $data[$j][$data['bound']]) {
						for ($k=0; $k <= $data['bound']; $k++) { 
							$tmp[$k] = $data[$j][$k];
							$data[$j][$k] = $data[$i][$k];
							$data[$i][$k] = $tmp[$k];
						}

					}
				}
			}
			return $data;
			unset($tmp, $data);
		}
	}
?>