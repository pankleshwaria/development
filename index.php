<?php

class CProgram {

	private $m_strMessage;

	public function __construct() {
	}

	public function setMessage( $strMessage ) {
		$this->m_strMessage = $strMessage;
	}

	public function getMessage() {
		return $this->m_strMessage;
	}

	public function printMessage() {
		echo $this->m_strMessage;
	}

	public function add( $firstNumber, $secondNumber ) {
		return $firstNumber + $secondNumber;
	}

}
