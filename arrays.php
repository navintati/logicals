<?php

$number = array(1,2,3,4,5);

$size = sizeof($number);
$count = count($number);

for ($i = $size; $i >= 0 ; $i--) { 
	echo $number[$i] . " ";
}

