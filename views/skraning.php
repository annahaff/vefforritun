
<header>
	<h1>Póstlisti</h1>
</header>

<div class="textbox">
	<p>Vilt þú vera skráð/ur á póstlista Önnu og Freydísar?</p>
	<p>Þú getur skráð þig hér! Vikulega munum við senda þér handskrifað bréf í pósti.</p>
</div>

<div class="wrapper">
	<form id="skraning" action="index.php?part=skraning" method="post">
		<div class="postbox">
			<div <?php if (!$validness_check[0]) echo 'class="invalid"'; else echo 'class="valid"'?> >
				<label for="name">Nafn: *</label>
				<input type="text" name="name" id="name" placeholder="Kalli" value="<?php if (!empty($skraning->name)) echo $skraning->name; ?>" />
			</div>

			<div <?php if (!$validness_check[2] || !$validness_check[3]) echo 'class="invalid"'; else echo 'class="valid"'?> >
				<label for="address">Heimilisfang: *</label>
				<input type="text" name="address" id="address" placeholder="Sæmundargata 16" value="<?php if (!empty($skraning->address)) echo $skraning->address; ?>" />
			</div>

			<div <?php if (!$validness_check[1] || !$validness_check[4]) echo 'class="invalid"'; else echo 'class="valid"'?> >
				<label for="email">Netfang: *</label>
				<input type="text" name="email" id="email" placeholder="kalli@kalli.is" value="<?php if (!empty($skraning->email)) echo $skraning->email; ?>" />
			</div>

			<div class="buttons">
				<input type="submit" value="Skrá mig">
			</div>
		
		</div>
	</form>


</div>