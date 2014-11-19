

<?php

require('skraning.class.php');

$part = '';
if (isset($_GET['part']))
{
	$part = $_GET['part'];
}

$method = $_SERVER['REQUEST_METHOD'];

$db = new PDO('sqlite:gestabok.db');
$commentsList = $db->query('SELECT * FROM Comments');

$skraning = new Skraning();
$validness_check = array(true, true, true, true, true);
$validness_fail = array();

$errors = array();
$inserted = false;
if ($method === 'POST' && $part === 'comments')
{
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$time = time();

	if ($name !== '' && $comment !== '') {
		$insert = $db->prepare("INSERT INTO Comments (name, datetime, comment) VALUES(:name, :datetime, :comment)");

		if ($insert->execute(array('name' => $name, 'datetime' => $time, 'comment' => $comment))) {
			$inserted = true;
		}
	}
	else {
		$errors[] = 'Þú verður að gefa upp nafn og athugasemd!';
	}
}


else if ($method === 'POST' && $part === 'skraning') {
	$skraning->Get($_POST);
	$validness_check = $skraning->is_valid();

	/*if (count(array_keys($validness_check, 'true')) == count($validness_check)) {
		echo "<div class='postbox'><p>Til hamingju, þú hefur verið skráð/ur!</p></div>";
	}
	else {*/
		$validness_fail = $skraning->is_error($validness_check);
	//}
}

include('views/header.php');
require('routing.php');
include('views/footer.php');