
<header>
	<h1>Póstlisti</h1>
</header>

<div class="textbox">
	<p>Vilt þú vera skráð/ur á póstlista Önnu og Freydísar?</p>
	<p>Þú getur skráð þig hér! Vikulega munum við senda þér handskrifað bréf í pósti.</p>
</div>

<div class="wrapper">

	<?php
		if (sizeof($validness_fail) != 0) {

			$ble = 0;
			/*{
			echo "<div class='errors'><p>Villur komu upp!</p><ul>";
			foreach($validness_fail as $val) {
				echo "<li>".$val."</li>";
			}
			echo "</ul></div>";*/
			//echo '<script type=\"text/javascript\">alert("' . $validness_fail[0] . '"); </script>';
			//echo '<script type=\"text/javascript\">alert("ja"); </script>';
			
			echo "<script type='text/javascript'>alert('";
			foreach($validness_fail as $val) {
				echo $val.'\n';

			}
			echo "');</script>";
		}

	?>

	<form id="skraning" action="index.php?part=skraning" method="post">

		<div class="postbox">
			
			<div <?php if (!$validness_check[0]) echo 'class="invalid"'; else echo 'class="field"'?> >
				<label for="name">Nafn: *</label>
				<input type="text" name="name" id="name" placeholder="Jón Jóns" value="<?php echo $skraning->name; ?>" />
			</div>

			<div <?php if (!$validness_check[2] || !$validness_check[3]) echo 'class="invalid"'; else echo 'class="field"'?> >
				<label for="address">Heimilisfang: *</label>
				<input type="text" name="address" id="address" placeholder="Aðalgata 10" value="<?php echo $skraning->address; ?>" />
			</div>

			<div <?php if (!$validness_check[1] || !$validness_check[4]) echo 'class="invalid"'; else echo 'class="field"'?> >
				<label for="email">Netfang: *</label>
				<input type="text" name="email" id="email" placeholder="nonni@example.org" value="<?php echo $skraning->email; ?>" />
			</div>

			<div class="buttons">
				<input type="submit" value="Skrá mig">
			</div>
		
		</div>

	</form>
</div>