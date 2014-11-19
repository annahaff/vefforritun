<h1>Gestabók</h1>

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

<div class="catpic">
	<img src="cat.jpg" alt="cat">
	<!--<img src="cat2.jpg" alt="cat2">
	<img src="cat3.jpg" alt="cat3">
	<img src="cat4.jpg" alt="cat4">-->
</div>


<form action="index.php?part=comments" method="post">
	<div class="postbox">
		<div <?php if (!$array[0]) echo 'class="invalid"'; else echo 'class="field"'?> >
			<label>Nafn:</label>
			<input type="text" name="name" placeholder="Kalli">
		</div>

		<div <?php if (!$array[1]) echo 'class="invalid"'; else echo 'class="field"'?> >
			<label>Athugasemd:</label>
			<textarea name="comment"></textarea>
		</div>
		<input type="submit" value="Bæta við athugasemd">

	</div>
</form>

<div class="commentbox">
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


