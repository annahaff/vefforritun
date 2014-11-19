

<?php

$part = '';
if (isset($_GET['part'])) {
	$part = $_GET['part'];
}

$method = $_SERVER['REQUEST_METHOD'];

require('skraning.class.php');
require('comments.class.php');

$skraning = new Skraning();
$validness_check = array(true, true, true, true, true);
$validness_fail = array();

$comments = new Comments();
$comment_check = array(true, true);
$comment_fail = array();

if ($method === 'POST' && $part === 'comments') {
	$comments->Get($_POST);
	$comment_check = $comments->is_valid();

	if (count(array_keys($comment_check, 'true')) == count($comment_check)) {
		$result = $comments->Insert($comments->name, $comments->comment, $comments->datetime);
	}
	else {
		$comment_fail = $comments->is_error($comment_check);
		if (sizeof($comment_fail) != 0) {
			echo "<script type='text/javascript'>alert('Villa kom upp!".'\n';
			foreach($comment_fail as $val) {
				echo $val.'\n';
			}
			echo "');</script>";
		}
	}
}

else if ($method === 'POST' && $part === 'skraning') {
	$skraning->Get($_POST);
	$validness_check = $skraning->is_valid();

	if (count(array_keys($validness_check, 'true')) == count($validness_check)) {
		$result = $skraning->Insert($skraning->name, $skraning->address, $skraning->email);
		echo "<script type='text/javascript'>alert('$result');</script>";
	}
	else {
		$validness_fail = $skraning->is_error($validness_check);
		if (sizeof($validness_fail) != 0) {
			echo "<script type='text/javascript'>alert('Villa kom upp!".'\n';
			foreach($validness_fail as $val) {
				echo $val.'\n';
			}
			echo "');</script>";
		}
	}
}


include('views/header.php');
require('routing.php');
include('views/footer.php');