<?php
require_once(realpath(dirname(__FILE__)) . '/Adres.php');

use Adres;

/**
 * @access public
 * @author Piotoor
 */
class Osoba {
	/**
	 * @AttributeType string
	 */
	private $_imi�;
	/**
	 * @AttributeType string
	 */
	private $_nazwisko;
	/**
	 * @AttributeType string
	 */
	private $_mail;
	/**
	 * @AttributeType string
	 */
	private $_telefon;
	/**
	 * @AttributeType Adres
	 */
	private $_adres_zamieszkania;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function przegl�daj_ksi�zki() {
		// Not yet implemented
	}
}
?>