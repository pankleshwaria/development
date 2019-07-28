<?php

class CProgram {

	private $m_strMessage

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

	public function subtract( $firstNumber, $secondNumber ) {
		return $firstNumber - $secondNumber
	}

	public function divide( $firstNumber, $secondNumber ) {
		return $firstNumber / $secondNumber
	}

	public function multiply( $firstNumber, $secondNumber ) {
		return $firstNumber * $secondNumber
	}

	public function square( $firstNumber ) {
		return $firstNumber * $firstNumber;
	}

}
