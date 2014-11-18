<h1>Hvað er að frétta?</h1>

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

if (!$inserted):

	?>
	<ul>
		<?php
		foreach ($commentsList as $row) {
			$name = $row['name'];
			$comment = $row['comment'];
			$datetime = date('d.m.Y G:i', $row['datetime']);
			echo "<li>$name sagði $comment, $datetime";
		}
		?>
	</ul>
	<?php
?>
<form action="index.php?part=comments" method="post">
	<fieldset>
		<legend>Athugasemd</legend>
		<label>Nafn:<input type="text" name="name"></label>
		<label>Athugasemd:<textarea name="comment"></textarea></label>
		<input type="submit" value="Bæta við!">
	</fieldset>
</form>

<?php
endif;
?>