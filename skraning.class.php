
<?php

class Skraning
{	
	public function Get($data) {	
		$this->name = $data['name'];
		$this->email = $data['email'];
		$this->address = $data['address'];
		$this->errors = array("0" => "Fylla verður út í nafn",
							  "1" => "Fylla verður út í netfang",
							  "2" => "Fylla verður út í heimilisfang",
							  "3" => "Heimilisfang verður að innihalda götuheiti og tölu",
							  "4" => "Netfang verður að innihalda @ og .");
	}

	public function Insert($name, $address, $email) {
		$db = new PDO('sqlite:lokaverkefni.db');
		$insert = $db->prepare("INSERT INTO postlist (name, address, email) VALUES(:name, :address, :email)");
		if ($insert->execute(array('name' => $name, 'address' => $address, 'email' => $email))) {
			return 'Skráning tókst';
		}
		else {
			return 'Þú ert nú þegar skráð/ur!';
		}
	}

	public function is_valid() {
		$error_index = array(true, true, true, true, true, true);
		if (empty($this->name)) {
			$error_index[0] = false;
		}
		if (empty($this->email) || !preg_match("/^.+@[a-zA-Z0-9]+\.[a-zA-Z]+/", $this->email)) {
			$error_index[1] = false;
			$error_index[4] = false;
		}
		if (empty($this->address) || !preg_match("/^.+\s[0-9]/", $this->address)) {
			$error_index[2] = false;
			$error_index[3] = false;
		}
		return $error_index;	
	}

	public function is_error($array) {
		$returnarr = array();
		for($i = 0; $i < sizeof($array); $i++) {
			if (!$array[$i]) {
				array_push($returnarr, $this->errors[$i]);
			}
		}
		return $returnarr;
	}

	public function clear() {
		$this->name = null;
		$this->address = null;
		$this->email = null;
	}
}

