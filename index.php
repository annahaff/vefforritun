<?php

$part = '';
if (isset($_GET['part']))
{
	$part = $_GET['part'];
}

$method = $_SERVER['REQUEST_METHOD'];

$db = new PDO('sqlite:gestabok.db');
$commentsList = $db->query('SELECT * FROM Comments');

$errors = array();
$inserted = false;
if ($method === 'POST' && $part === 'comments')
{
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$time = time();

	if ($name !== '' && $comment !== '')
	{
		$insert = $db->prepare("INSERT INTO Comments (name, datetime, comment) VALUES(:name, :datetime, :comment)");

		if ($insert->execute(array('name' => $name, 'datetime' => $time, 'comment' => $comment)))
		{
			$inserted = true;
		}
	}
	else
	{
		$errors[] = 'Þú verður að gefa upp nafn og athugasemd!';
	}
}

include('views/header.php');
require('routing.php');
include('views/footer.php');