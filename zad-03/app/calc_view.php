<?php
include _ROOT_PATH.'/templates/top.html';
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <!--<legend>Kalkulator rat</legend>-->
	<fieldset>
	    <label for="id_x">Kwota: </label>
	    <input id="id_x" type="text" name="x" value="<?php print($x); ?>" /><br />
	    <label for="id_y">Oprocentowanie: </label>
	    <input id="id_y" type="text" name="y" value="<?php print($y); ?>" /><br />
	    <label for="id_z">Liczba lat: </label>
	    <input id="id_z" type="text" name="z" value="<?php print($z); ?>" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<h3>
<?php echo 'Wynik: '.$result; ?>
</h3>
<script>
    window.onload = function() {
        window.scrollTo(0, document.body.scrollHeight);
    };
</script>
<?php } ?>

<?php
include _ROOT_PATH.'/templates/bottom.html';
?>
