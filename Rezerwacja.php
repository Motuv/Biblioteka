<?php
require_once(realpath(dirname(__FILE__)) . '/Data.php');
require_once(realpath(dirname(__FILE__)) . '/Katalog.php');
require_once(realpath(dirname(__FILE__)) . '/Ksi¹¿ka.php');
require_once(realpath(dirname(__FILE__)) . '/Klient.php');
require_once(realpath(dirname(__FILE__)) . '/Modyfikacja_rezerwacji.php');

use Data;
use Katalog;
use Ksi¹¿ka;
use Klient;
use Modyfikacja_rezerwacji;

/**
 * @access public
 * @author Piotoor
 */
class Rezerwacja {
	/**
	 * @AttributeType Data
	 */
	private $_termin_wypo¿yczenia;
	/**
	 * @AttributeType Data
	 */
	private $_termin_zwrotu;
	/**
	 * @AttributeType bool
	 */
	private $_przedluzana;
	/**
	 * @AttributeType Katalog
	 * /**
	 *  * @AssociationType Katalog
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_Katalog_;
	/**
	 * @AttributeType Ksi¹¿ka
	 * /**
	 *  * @AssociationType Ksi¹¿ka
	 *  * @AssociationMultiplicity 0..1
	 *  * /
	 */
	public $_unnamed_Ksi¹¿ka_;
	/**
	 * @AttributeType Klient
	 * /**
	 *  * @AssociationType Klient
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_Klient_;
	/**
	 * @AttributeType Modyfikacja rezerwacji
	 * /**
	 *  * @AssociationType Modyfikacja rezerwacji
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_Modyfikacja_rezerwacji_;

	/**
	 * @access public
	 * @return bool
	 * @ReturnType bool
	 */
	public function czy_po_terminie() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return bool
	 * @ReturnType bool
	 */
	public function czy_tydzien_do_terminu() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function czy_mozna_przedluzyc() {
		// Not yet implemented
	}
}
?>