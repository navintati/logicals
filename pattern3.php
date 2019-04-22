<?php

echo "<h1> PHP Pyramid Task </h1>";

$irows = 10;
$icols = 1;
$spattern = "";
$mleft = 150;
	
for ($i = 1; $i <= $irows; $i++) { 
	
	$spattern .= ($i%2==0) ? "<span style='color: red; margin-left:".$mleft."px;'>" : "<span style='color: green; margin-left:".$mleft."px;'>";
	
	for ($j = 1; $j <= $icols; $j++) { 
		$spattern .= "*";
	}

	$spattern .= "</span><br />";
	$icols = $j+1;
	$mleft -= 7;

}

echo $spattern;

?>