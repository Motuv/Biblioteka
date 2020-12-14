<?php
require_once(realpath(dirname(__FILE__)) . '/Adres.php');
require_once(realpath(dirname(__FILE__)) . '/Data.php');

use Adres;
use Data;

/**
 * @access public
 * @author Piotoor
 */
class Cz³owiek {
	/**
	 * @AttributeType string
	 */
	private $_imiê;
	/**
	 * @AttributeType string
	 */
	private $_nazwisko;
	/**
	 * @AttributeType Adres
	 */
	private $_adres_zamieszkania;
	/**
	 * @AttributeType Data
	 */
	private $_data_urodzenia;
	/**
	 * @AttributeType string
	 */
	public $_email;
	/**
	 * @AttributeType string
	 */
	private $_telefon;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function przegl¹d_ksi¹zek() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function zweryfikuj_dane() {
		// Not yet implemented
	}
}
?>