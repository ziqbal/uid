<?php

/**
*       Test PHP Class for generating a Unique ID
*       2004-12-10      First version   Zafar Iqbal
*/


// Need to include file where class lives
require_once("class-uid.php");

// Create new class object
$obj = new UIDClass();

// Get current UID
$exampleUID = $obj->getUID();
print("UID is $exampleUID\n");

// Generate another UID
$obj->generateUID();

// Get current UID
$anotherUID = $obj->getUID();
print("UID is $anotherUID\n");

?>
