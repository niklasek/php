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
<?php
endif
?>

