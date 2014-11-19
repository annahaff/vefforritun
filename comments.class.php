
<?php

class Comments
{	
	public function Get($data) {	
		$this->name = $data['name'];
		$this->comment = $data['comment'];
		$this->datetime = time();
		$this->errors = array("0" => "Fylla verður út í nafn",
							  "1" => "Fylla verður út athugasemd");
	}

	public function Select() {
		$db = new PDO('sqlite:lokaverkefni.db');
		$select = $db->query("SELECT * FROM Comments ORDER BY date(datetime) DESC");
		return $select;
	}

	public function Insert($name, $comment, $datetime) {
		$db = new PDO('sqlite:lokaverkefni.db');
		$insert = $db->prepare("INSERT INTO Comments (name, comment, datetime) VALUES(:name, :comment, :datetime)");
		$insert->execute(array('name' => $name, 'comment' => $comment, 'datetime' => $datetime));
	}

	public function is_valid() {
		$error_index = array(true, true);
		if (empty($this->name)) {
			$error_index[0] = false;
		}
		if (empty($this->comment)) {
			$error_index[1] = false;
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
		$this->comment = null;
	}
}