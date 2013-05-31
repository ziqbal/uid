<?php
/**
*	PHP Class for generating a Unique ID
*	2005-01-10	Replaced with GLOBALS and PID	
*	2005-01-02	Added more ingredients to hash
*	2004-12-10	First version   Zafar Iqbal
*/
class UIDClass
{
	// Private variable to hold current ID
	private $uid = '';

	// Return current ID
	function getUID(){
		// Generate ID if we have not done so already
		if($this->uid=='') $this->generateUID();

		// Return ID
		return $this->uid;
   	}

	// Generate new ID and store in private variable
	function generateUID(){
		// Find seconds and microseconds from system clock
		list($usec,$sec) = explode(' ',microtime());

		// Seed the random number generator with above timings
		mt_srand((float) $sec + ((float) $usec * 1000000));

		// Generate hash using GLOBALS and PID
		$this->uid = sha1(uniqid(mt_rand(),true).serialize($GLOBALS).getmypid());
	}
}
?>
