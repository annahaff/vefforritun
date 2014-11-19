
<?php

/**
 * Hlutur sem heldur utan um skráningu, kann að búa sig til útfrá gögnum á formi og validate'a
 */
class Skraning
{
	public $name;
	public $email;
	public $address;
	public $errors;
	
	public function Get($data) {	
		$this->name = $data['name'];
		$this->email = $data['email'];
		$this->address = $data['address'];
	
		$this->errors = array("0" => "Fylla verður út í nafn",
							  "1" => "Fylla verður út í netfang",
							  "2" => "Fylla verður út í heimilisfang",
							  "3" => "Heimilisfang verður að innihalda götuheiti og tölu",
							  "4" => "Netfang verður að innihalda @ og .",
							  );
	}

	public function is_valid() {
		$error_index = array(true, true, true, true, true, true, true);
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
}