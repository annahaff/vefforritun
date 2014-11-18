<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Freydís og</title>
		<link rel="stylesheet" href="lokaverkefni.css">
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="index.php"  <?php echo $part === '' ? 'class="selected"' : "" ?>>Forsíða</a></li>
				<li><a href="index.php?part=about" <?php echo $part === 'about' ? 'class="selected"' : "" ?>>Um</a></li>
				<li><a href="index.php?part=comments" <?php echo $part === 'comments' ? 'class="selected"' : "" ?>>Athugasemdir</a></li>
			</ul>
		</nav>
		<main>