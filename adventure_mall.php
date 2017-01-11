<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Äventyret</h1>

<?php
if ($_GET['player_name'] == NULL):
?>
<form action="adventure_mall.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="submit" value="Skicka">
</form>
<?php
else:
?>
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du står i en skogsdunge. Till väster ser du en liten stuga med en rykande skorsten och österfrån rinner en liten flod. Norrut ser du bara träd.</p>
<form action="adventure_mall.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="direction" value="west" id="west">
	<label for="west">Väster</label><br>
	<input type="radio" name="direction" value="north" id="north">
	<label for="north">Norr</label><br>
	<input type="radio" name="direction" value="east" id="east">
	<label for="east">Öster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>
<?php
endif
?>

