{extends file="../templates/main.tpl"}

{block name=content}

<form action="{$app_url}/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <!--<legend>Kalkulator rat</legend>-->
	<fieldset>
	    <label for="id_x">Kwota: </label>
        <input id="id_x" type="text" name="x" value="{$form['x']}" /><br />
	    <label for="id_y">Oprocentowanie: </label>
	    <input id="id_y" type="text" name="y" value="{$form['y']}" /><br />
	    <label for="id_z">Liczba lat: </label>
	    <input id="id_z" type="text" name="z" value="{$form['z']}" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<h3> Wynik: {$result} </h3>
<script>
    window.onload = function() {
        window.scrollTo(0, document.body.scrollHeight);
    };
</script>

{/block}
