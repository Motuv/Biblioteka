<?php
require_once(realpath(dirname(__FILE__)) . '/Rezerwacja.php');
require_once(realpath(dirname(__FILE__)) . '/Kara.php');
require_once(realpath(dirname(__FILE__)) . '/Data.php');
require_once(realpath(dirname(__FILE__)) . '/Cz�owiek.php');

use Rezerwacja;
use Kara;
use Data;
use Cz�owiek;

/**
 * @access public
 * @author Piotoor
 */
class Klient extends Cz�owiek {
	/**
	 * @AttributeType double
	 */
	private $_wysoko��_kary;
	/**
	 * @AttributeType bool
	 */
	private $_aktywne;
	/**
	 * @AttributeType bool
	 */
	private $_zweeryfikowany;
	/**
	 * @AttributeType Rezerwacja
	 * /**
	 *  * @AssociationType Rezerwacja
	 *  * @AssociationMultiplicity 0..1
	 *  * /
	 */
	public $_unnamed_Rezerwacja_;
	/**
	 * @AttributeType Kara
	 * /**
	 *  * @AssociationType Kara
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_Kara_;

	/**
	 * @access public
	 * @return Data
	 * @ReturnType Data
	 */
	public function przed�u�_ksi�zk�() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Rezerwacja
	 * @ReturnType Rezerwacja
	 */
	public function zobacz_rezerwacj�() {
		// Not yet implemented
	}
}
?>