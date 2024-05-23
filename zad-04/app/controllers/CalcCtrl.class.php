<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once 'CalcForm.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = null;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		if ($this->form->z == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Podana kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Podane oprocentowanie nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->z )) {
				$this->msgs->addError('Podana liczba lat nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->z = intval($this->form->z);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
            $this->result = $this->form->x* (100 + $this->form->y) / 100 / ($this->form->z * 12);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}


	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
	    getSmarty()->assign('author','Oscar Szumiak');
        getSmarty()->assign('page_title','Calc Home');
        getSmarty()->assign('page_description','A simple single purpose calculator.');

		getSmarty()->assign('msgs',$this->msgs);
		getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

		getSmarty()->display('CalcView.tpl');
	}
}
