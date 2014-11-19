<header>
	<h1>Gestabók</h1>
</header>

<form action="index.php?part=comments" method="post">
	<div class="postbox">
		<div <?php if (!$comment_check[0]) echo 'class="invalid"'; else echo 'class="valid"'?>>
			<label>Nafn: </label>
			<input id="name" type="text" name="name" placeholder="Kalli" value="<?php if (!empty($comments->name)) echo $comments->name; ?>">
		</div>

		<div <?php if (!$comment_check[1]) echo 'class="invalid"'; else echo 'class="valid"'?>>
			<label>Athugasemd:</label>
			<textarea name="comment" placeholder="Geðveik síða!"></textarea>
		</div>
		<input type="submit" value="Bæta við athugasemd">
	</div>
</form>

<div class="postbox">
	<?php
		$commentsList = $comments->Select();
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


