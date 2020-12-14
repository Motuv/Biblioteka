<?php
require_once(realpath(dirname(__FILE__)) . '/Ksi¹¿ka.php');
require_once(realpath(dirname(__FILE__)) . '/Rezerwacja.php');

use Ksi¹¿ka;
use Rezerwacja;

/**
 * @access public
 * @author Piotoor
 */
class Katalog {
	/**
	 * @AttributeType Ksi¹¿ka
	 * /**
	 *  * @AssociationType Ksi¹¿ka
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_unnamed_Ksi¹¿ka_ = array();
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
	 * @return Ksi¹¿ka
	 * @ReturnType Ksi¹¿ka
	 */
	public function wyszukaj_ksi¹¿kê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function usuñ_ksi¹¿kê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function zaktualizuj_ksi¹zkê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_ksi¹¿kê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function dodaj_rezerwacjê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function anuluj_rezerwacjê() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function wyszukaj_rezerwacjê() {
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