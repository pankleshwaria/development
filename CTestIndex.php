<?php

require_once __DIR__ . '\index.php';

class CTestIndex {

	public function __construct() {
		echo 'Running UnitTest case...' . PHP_EOL;
	}

	public function testSetMessage() {
		$objProgram = new CProgram();
		$objProgram->setMessage( 'Hello World' );
		$strResult = $objProgram->getMessage();

		if( $strResult == 'Hello World' ) {
			echo 'Success!!' . PHP_EOL;
			return true;
		} else {
			echo 'Opps! Try again.' . PHP_EOL;
			exit( 1 );
		}
	}

	public function testAdd() {
		$objProgram = new CProgram();
		$strResult = $objProgram->add( 2, 3 );

		if( $strResult == 5 ) {
			echo 'Test pass.';
			return true;
		} else {
			echo 'Test fail.';
			exit( 1 );
		}
	}

}
$objTestIndex = new CTestIndex();
$objTestIndex->testAdd( 2, 3 );
