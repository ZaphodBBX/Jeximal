<?php 

require 'Jex.php';



/**
* Example using random characters
**/

$characters = array('D', 'Y', 'J', 'i', 'G', '7', '1', 'n', 'l', 'A', 'h', 'Q', 'X', '5', 'E', 's', 'u', '6', 'p', 'V');

$RandomChars = new Jeximal($characters);

echo $RandomChars->toJex(3844)."\n";


/**
* Example using binary digits
**/

$binary = array('0', '1');

$BinChars = new Jeximal($binary);

echo $BinChars->toJex(55)."\n";

