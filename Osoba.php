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
	private $_imiê;
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
	public function przegl¹daj_ksi¹zki() {
		// Not yet implemented
	}
}
?>