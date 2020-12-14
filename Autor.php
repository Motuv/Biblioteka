<?php
require_once(realpath(dirname(__FILE__)) . '/Ksi¹¿ka.php');

use Ksi¹¿ka;

/**
 * @access public
 * @author Piotoor
 */
class Autor {
	/**
	 * @AttributeType string
	 */
	public $_imiê;
	/**
	 * @AttributeType string
	 */
	public $_nazwisko;
	/**
	 * @AttributeType Ksi¹¿ka
	 * /**
	 *  * @AssociationType Ksi¹¿ka
	 *  * @AssociationMultiplicity 1..*
	 *  * /
	 */
	public $_unnamed_Ksi¹¿ka_ = array();
}
?>