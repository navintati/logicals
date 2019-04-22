<?php

// Example
function table($no, $i){
	if ($i > 10) {
		return false;
	} else {
		echo $no * $i . "<br />";
		table($no, ++$i); // 5 table [ before increamenting check out ]
	}
}
$no = 5;
$i = 1;
table($no, $i);

// Example
/* Start [ $i for Colomn AND $j for Rows ]
* ji
* j * ji
* j * j * ji
* j * j * j * ji
* j * j * j * j * ji
END */
for ($i = 1; $i <= 5; $i++) {  // $i for Colomns
	for ($j = 1; $j <= $i; $j++) {  // $j for Rows
		echo " * j";
	}
	echo "i <br />";
}

// Example

$string = "My Name is Navin";
$new = explode(' ', $string);
$new = array_reverse($new);
print_r(implode(' ', $new));

// Output => Navin is Name My



// IMP Start

$numbers = array(1,2,3,4,5,6);
print_r($numbers);
foreach($numbers as &$number){ 	// & use here
  $number = $number *2;
}
echo '<br />';
unset($number);
print_r($numbers);

// Output =>
/*
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 );
Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 [5] => 12 ); 
*/
// IMP End


?>