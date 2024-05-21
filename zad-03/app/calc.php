<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

//pobranie parametrów
function getParams(&$x,&$y,&$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$z,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($z))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if ( $z == "") {
		$messages [] = 'Nie podano liczby lat';
    }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Podana kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Podane oprocentowanie nie jest liczbą całkowitą';
	}	
    
    if (! is_numeric( $z )) {
		$messages [] = 'Podana liczba lat nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$z,&$result){
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);

	//wykonanie operacji
    $result = $x * (100 + $y) / 100 / ($z * 12);
}

//definicja zmiennych kontrolera
$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages) ) { // gdy brak błędów
	process($x,$y,$z,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
include 'calc_view.php';
