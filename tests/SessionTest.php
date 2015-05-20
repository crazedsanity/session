<?php
/*
 * Created on Jan 13, 2009
 */

//use crazedsanity\session;


//=============================================================================
class TestOfSession extends PHPUnit_Framework_TestCase {
	
	//-------------------------------------------------------------------------
	function __construct() {
	}//end __construct()
	//-------------------------------------------------------------------------
	
	
	
	//-------------------------------------------------------------------------
	function test_instantiation() {
		$x = new crazedsanity\session\Session();
		
		$this->assertTrue(strlen($x->sid) > 0);
		$this->assertEquals($x->uid, 0);
		$this->assertEquals($x->sid_check, 1);
		$this->assertEquals($x->is_authenticated(), 0);
		$this->assertEquals($x->get_cookie(__CLASS__), null);
		$this->assertEquals($x->drop_cookie(__CLASS__), null);
	}
	//-------------------------------------------------------------------------
	
	
}//end TestOfCSContent
//=============================================================================
?>
