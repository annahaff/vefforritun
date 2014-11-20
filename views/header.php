<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Freydís og Anna</title>
		<link rel="stylesheet" href="lokaverkefni.css">
		<script src="jquery-1.11.0.min.js"></script>
	</head>
	<body>
		<div class="nav">
			<nav>
				<ul>
					<li><a href="index.php"  <?php echo $part === '' ? 'class="selected"' : "" ?>>Forsíða</a></li>
					<li><a href="index.php?part=about" <?php echo $part === 'about' ? 'class="selected"' : "" ?>>Tónleikar</a></li>
					<li><a href="index.php?part=skraning" <?php echo $part === 'skraning' ? 'class="selected"' : "" ?>>Skráning á póstlista</a></li>
					<li><a href="index.php?part=pacman" <?php echo $part === 'pacman' ? 'class="selected"' : ""?>>Pacman</a></li>
					<li><a href="index.php?part=comments" <?php echo $part === 'comments' ? 'class="selected"' : "" ?>>Gestabók</a></li>
				</ul>
			</nav>
		</div>
		<main>