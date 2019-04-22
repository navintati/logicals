<?php

// Example 1

echo " Example 1 <br /> <br />";

for ($i = 1; $i <= 4; $i++) {

	for ($j = 1; $j <= $i; $j++) { 
		echo $j . " ";
	}

	echo " <br /> ";
}


for ($i = 1; $i <= 5; $i++) {

	for ($j = 1; $j <= 6 - $i; $j++) { 
		echo $j . " ";
	}
	
	echo " <br /> ";
}


echo " <br /> ";

// Example 2

echo " Example 2 <br /> <br /> ";

for ($i=1; $i <= 5; $i++) { 
	
	for ($j=1; $j <= $i; $j++) { 
		echo $i . " ";
	}

	echo " <br /> ";

}

for ($i = 5; $i >= 1; $i--) { 
	
	for ($j=1; $j <= $i; $j++) { 
		echo $i . " ";
	}

	echo " <br /> ";

}



?>