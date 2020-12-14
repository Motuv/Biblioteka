<?php
require_once(realpath(dirname(__FILE__)) . '/Raport.php');
require_once(realpath(dirname(__FILE__)) . '/Klient.php');
require_once(realpath(dirname(__FILE__)) . '/Bibliotekarz.php');

use Raport;
use Klient;
use Bibliotekarz;

/**
 * @access public
 * @author Piotoor
 */
class System {

	/**
	 * @access public
	 * @param aKlient
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function przypomnij_o_terminie_zwrotu($aKlient) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Raport
	 * @ReturnType Raport
	 */
	public function stwórz_raport() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Klient
	 * @ReturnType Klient
	 */
	public function zaloz_konto() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Bibliotekarz
	 * @ReturnType Bibliotekarz
	 */
	public function dodaj_konto_bibliotekarza() {
		// Not yet implemented
	}
}
?>