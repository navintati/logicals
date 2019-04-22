<?php


// Example 2 Tryangle Pyramid
	for ($i=1; $i <= 4; $i++) {
		
		for ($n = 4; $n >= $i ; $n--) {
			echo "&nbsp;"."&nbsp;";
		}

		for ($j = 1; $j <= $i ; $j++) {
			echo "&nbsp;*&nbsp;";
		}
		echo "<br />";
	}

// Example 1 Tryangle Pyramid

$n = 1;

	for ($r = 1; $r <= 4; $r++) {  // FOR [ ROW ]
		
		for ($x = 4; $x >= $r; $x--) { 	// 	New One Added Here For [ SPACE ] 
			echo "&nbsp;"."&nbsp;";
		}

		for ($p = 1; $p <= $r; $p++) { // SAME For [ COLUMN ]
			// echo "&nbsp;"."*"."&nbsp;";
			echo "&nbsp;".$n++."&nbsp;";
		}
		echo "<br />";

	}

	      1 
        2  3 
      4  5  6 
   	7  8  9  10 


   	     * 
       *  * 
     *  *  * 
   *  *  *  * 

// Example 2 Tryagle

$row = 5;
$space = 5;

for ($i = 1; $i <= $row; $i++) { 
	
	for ($j = $space; $j >= $i ; $j--) { 
		echo "&nbsp;"."&nbsp;";
	}

	for ($n=1; $n <= $i; $n++) { 
		echo "* &nbsp;";
	}

	echo "<br />";

}

    *  
   *  *  
  *  *  *  
 *  *  *  *  
*  *  *  *  *  



?>