<header>
	<h1>Gestabók</h1>
</header>

<?php
if (sizeof($errors) > 0)
{
	foreach ($errors as $value) {
		echo '<p><strong>'.$value.'</strong></p>';
	}
}

if ($inserted)
{
	echo '<p>Takk fyrir athugasemdina, þú færð gott karma að launum</p>';
}
?>


<form action="index.php?part=comments" method="post">
	<div class="postbox">

		<!-- Hafa hér svona klasa dæmi eins og í skráningunni? --> 
		<!-- Ef notandi hefur slegið inn nafn náum við í það úr $comment->name o.s.frv. -->
		
		<div <?php if (!$validness_check[3]) echo 'class="invalid"'; else echo 'class="valid"'?>>
			<label>Nafn: </label>
			<input id="name" type="text" name="name" placeholder="Kalli" value="<?php echo $comment->name; ?>">
		</div>

		<div <?php if (!$validness_check[3]) echo 'class="invalid"'; else echo 'class="valid"'?>>
			<label>Athugasemd:</label>
			<textarea name="comment" placeholder="Geðveik síða!" value="<?php echo $comment->comment_txt; ?>"></textarea>
		</div>


		<input type="submit" value="Bæta við athugasemd">

	</div>
</form>

<div class="postbox">
	<?php
	foreach ($commentsList as $row) {
		$name = $row['name'];
		$comment = $row['comment'];
		$datetime = date('d.m.Y G:i', $row['datetime']);
		echo "<div class='comment'>";
		echo "<p>Dagsetning: $datetime</p>";
		echo "<p>Nafn: $name</p>";
		echo "<p class='commenttxt'>$comment</p>";
		echo "</div>";
	}
	?>
</div>


