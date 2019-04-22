<?php


// Example 1
echo " Example 1 <br /> <br /> ";

for ($i = 1; $i <= 5; $i++) {

	for ($j = 1; $j <= $i; $j++) { 
		echo $j . " ";
	}
		// echo $i;
	echo " <br /> ";
}

echo "<br />";

// Example 2
echo " Example 2 .1 <br /> <br /> ";

for ($i = 5; $i >= 1; $i--) { 
	
	for ($j = 1; $j <= $i; $j++) { 
		echo $j . " ";
	}

	echo " <br /> ";

}

echo " <br /> <br /> ";

echo " Example 2 . 2 <br /> <br /> ";

for ($i = 1; $i <= 5; $i++) { 
	
	for ($j = 5; $j >= $i; $j--) { 
		echo $j . " ";
	}

	echo " <br /> ";

}

echo " <br /> ";
// Example 3
echo " Example 3 <br /> <br /> ";

for ($i=1; $i <= 5; $i++) { 
	
	for ($j=1; $j <= $i; $j++) { 
		echo $i . " ";
	}

	echo " <br /> ";

}

echo "<br />";
// Example 4
echo " Example 4 <br /> <br /> ";

for ($i = 5; $i >= 1; $i--) { 
	
	for ($j=1; $j <= $i; $j++) { 
		echo $i . " ";
	}

	echo " <br /> ";

}


?>