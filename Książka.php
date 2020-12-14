<?php
require_once(realpath(dirname(__FILE__)) . '/Autor.php');
require_once(realpath(dirname(__FILE__)) . '/Katalog.php');
require_once(realpath(dirname(__FILE__)) . '/Wydawnictwo.php');
require_once(realpath(dirname(__FILE__)) . '/Rezerwacja.php');

use Autor;
use Katalog;
use Wydawnictwo;
use Rezerwacja;

/**
 * @access public
 * @author Piotoor
 */
class Ksi¹¿ka {
	/**
	 * @AttributeType string
	 */
	public $_tytu³;
	/**
	 * @AttributeType string
	 */
	public $_gatunek;
	/**
	 * @AttributeType string
	 */
	public $_wydawnictwo;
	/**
	 * @AttributeType int
	 */
	protected $_liczba_wypozyczen;
	/**
	 * @AttributeType string
	 */
	private $_status;
	/**
	 * @AttributeType Autor
	 * /**
	 *  * @AssociationType Autor
	 *  * /
	 */
	public $_unnamed_Autor_6;
	/**
	 * @AttributeType Katalog
	 * /**
	 *  * @AssociationType Katalog
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_Katalog_;
	/**
	 * @AttributeType Wydawnictwo
	 * /**
	 *  * @AssociationType Wydawnictwo
	 *  * /
	 */
	public $_unnamed_Wydawnictwo_;
	/**
	 * @AttributeType Rezerwacja
	 * /**
	 *  * @AssociationType Rezerwacja
	 *  * @AssociationMultiplicity 1..6
	 *  * /
	 */
	public $_unnamed_Rezerwacja_ = array();

	/**
	 * @access public
	 * @return bool
	 * @ReturnType bool
	 */
	public function czy_dostêpna() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function zmieñ_status() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function wypisz_dane() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function wczytaj_dane() {
		// Not yet implemented
	}
}
?>