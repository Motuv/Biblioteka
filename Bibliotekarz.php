<?php
require_once(realpath(dirname(__FILE__)) . '/Cz�owiek.php');

use Cz�owiek;

/**
 * @access public
 * @author Piotoor
 */
class Bibliotekarz extends Cz�owiek {

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function wydaj_ksi�zki() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aRezerwacja
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function odbierz_ksi��ki($aRezerwacja) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aKlient
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function Aktywuj_konto($aKlient) {
		// Not yet implemented
	}
}
?>