<?php
require_once(realpath(dirname(__FILE__)) . '/Ksi��ka.php');
require_once(realpath(dirname(__FILE__)) . '/Rezerwacja.php');

use Ksi��ka;
use Rezerwacja;

/**
 * @access public
 * @author Piotoor
 */
class Katalog {
	/**
	 * @AttributeType Ksi��ka
	 * /**
	 *  * @AssociationType Ksi��ka
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_unnamed_Ksi��ka_ = array();
	/**
	 * @AttributeType Rezerwacja
	 * /**
	 *  * @AssociationType Rezerwacja
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_unnamed_Rezerwacja_ = array();

	/**
	 * @access public
	 * @return Ksi��ka
	 * @ReturnType Ksi��ka
	 */
	public function wyszukaj_ksi��k�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function usu�_ksi��k�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function zaktualizuj_ksi�zk�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_ksi��k�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_rezerwacj�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function anuluj_rezerwacj�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function wyszukaj_rezerwacj�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_klienta() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function usun_klienta() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_bibliotekarza() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function usun_bibliotekarza() {
		// Not yet implemented
	}
}
?>