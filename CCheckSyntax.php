<?php

class CCheckSyntax {

	public function __construct() {
		echo 'Running syntax checks...' . PHP_EOL;
	}

	public function runChecks() {
		$strCmd = 'php -l';
		$strResult = exec( $strCmd );

		if( false == is_null( $strResult ) ) {
			echo 'Checks Failed!' . PHP_EOL;
			exit( 1 );
		} else {
			echo 'Checks Pass!' . PHP_EOL;
		}
	}

}
$objCheckSyntax = new CCheckSyntax();
$objCheckSyntax->runChecks();
