<?php

class CCheckSyntax {

	public function __construct() {
		echo 'Running syntax checks...' . PHP_EOL;
	}

	public function runChecks() {
		$strCmd = 'php -l /var/lib/jenkins/workspace/Test/index.php';
		$strResult = shell_exec( $strCmd );

		if( false !== strpos( $strResult, ' error:' ) ) {
			echo 'Checks Failed!' . PHP_EOL;
			exit( 1 );
		} else {
			echo 'Checks Pass!' . PHP_EOL;
		}
	}

}
$objCheckSyntax = new CCheckSyntax();
$objCheckSyntax->runChecks();
