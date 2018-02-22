<?php

class Program {

	public function __construct() {
		$this->printMessage();
	}
	
	public function printMessage() {
		echo 'Hello World';
	}
}
$objProgram = new Program();