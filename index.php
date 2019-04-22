<?php

function pyramid($no)
{
	for ($i = 1; $i <= $no; $i++) { 
		for ($j = 0; $j < $i; $j++) { 
			echo " * J";
		}
		echo "I <br />";
	}
}
$no = 5;
pyramid($no);
echo "<br />";
echo "<br />";

function pyramidt($not)
{
	for ($i = 1; $i <= $not; $i++) { 
		for ($j = 1; $j <= $not; $j++) { 
			if ($j<=($not-$i)) {
				echo ' '.' ';
			} else {
				echo ' * ';
			}
		}
		echo 'I <br />';
	}
}
$not = 5;
pyramidt($not);

echo "<br />";
echo "<br />";

echo "<pre>";
$nos = 5;
$space = 5;
for ($i = 0; $i <= $nos; $i++) {
     
    for ($k = 0; $k < $space; $k++) {
        echo " ";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }
     
    $space--;
    echo "<br/>";
}
echo "</pre>";

// $array1 = array(12,23,44,87,45,26,76);
// $large = $array1[0];

// for ($i = 1 ; $i < count($large); $i++) { 
// 	if ($array1[$i] > $large) {
// 		$large = $array1[$i];
// 	}
// }
// echo $large;

// echo "<pre>"; print_r($large); echo "</pre>"; die();



/***** test.php *****/


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



