<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';

switch ($action) {
	default : // 'calcView'
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'calcCompute' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
	case 'action1' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}
