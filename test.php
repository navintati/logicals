<?php

// $row = 8;
// $col = 8;

// for ($i = 1; $i <= $row; $i++) { 
	
// 	// echo "<table width='270px' border='1px' cellspacing='0px' cellpadding='0px'><tr>"
// 	echo "<table border=1px><tr>";

// 	for ($j = 1; $j <= $col; $j++) { 
		
// 		$tot = $i + $j;

// 		if ($tot % 2 == 0) {
// 			echo "<td height=30px width=30px bgcolor=#FFF></td>";
// 		} else {
// 			echo "<td height=30px width=30px bgcolor=#000></td>";
// 		}

// 	}
// 	echo "</tr></table>";

// }

// input array  

$input = array(4, 3, 6, 5, 8, 7, 2); 

  
// comparator function to filter odd elements 

function oddCmp($input) 
{ 

    return ($input & 1); 
} 

  
// comparator function to filter odd elements 

function evenCmp($input) 
{ 

    return !($input & 1); 
} 

// filter odd-index elements 

$odd = array_filter($input, "oddCmp"); 
// echo "<pre>"; print_r($odd); 
  
// filter even-index elements 

$even = array_filter($input, "evenCmp"); 
// echo "<pre>"; print_r($even); die();
  
// re-index odd array by use of array_values() 

$odd = array_values(array_filter($odd)); 

  
// re-index even array by use of array_values() 

$even = array_values(array_filter($even)); 

  
// print odd-indexed array 

print"Odd array :\n"; 

print_r($odd); 

  
// print even-indexed array 

print"\nEven array :\n"; 

print_r($even); 




