<?php

// $arr1 = array(1,2,3,4,5,6,7,8,10,12,13,14,15,16,17,18,19,20,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99);

// // $arr2 = range(1, max($arr1));
// $arr2 = range(1, 100);

// $missing = array_diff($arr2, $arr1);

// echo "<pre>"; print_r($missing); echo "</pre>"; die();



$string = "My Name is Navin";
$new = explode(' ', $string);
$new = array_reverse($new);
print_r(implode(' ', $new));

// This code is contributed by ita_c



/* 
// PHP program to find 
// the Misiing Number 
// getMissingNo takes array and  
// size of array as arguments 
function getMissingNo($a, $n) 
{ 
    // For xor of all the 
    // elements in array  
    $x1 = $a[0];  
      
    // For xor of all the  
    // elements from 1 to n + 1 
    $x2 = 1;  
      
    for ($i = 1; $i < $n; $i++) 
        $x1 = $x1 ^ $a[$i]; 
              
    for ($i = 2; $i <= $n + 1; $i++) 
        $x2 = $x2 ^ $i;      
      
    return ($x1 ^ $x2); 
} 
  
// Driver Code 
$a = array(1, 2, 4, 5, 6);
$miss = getMissingNo($a, 5);
echo($miss);
  

*/ 




// given array. 3 and 6 are missing.

// $arr1 = array(1,2,4,5,7); 

// construct a new array:1,2....max(given array).

// $arr2 = range(1,max($arr1));                                                    

// use array_diff to get the missing elements

// $missing = array_diff($arr2,$arr1); // (3,6)