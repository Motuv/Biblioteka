<?php
require_once(realpath(dirname(__FILE__)) . '/Ksi��ka.php');

use Ksi��ka;

/**
 * @access public
 * @author Piotoor
 */
class Autor {
	/**
	 * @AttributeType string
	 */
	public $_imi�;
	/**
	 * @AttributeType string
	 */
	public $_nazwisko;
	/**
	 * @AttributeType Ksi��ka
	 * /**
	 *  * @AssociationType Ksi��ka
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_unnamed_Ksi��ka_ = array();
}
?>