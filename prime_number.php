<?php

// 2, 3, 5, 7, 11, 13, 17, 19, 23

function primeNum($n){

	for ($i = 1; $i <= $n; $i++) { 
		$counter = 0;
		for ($j = 1; $j <= $i; $j++) { 
			if (($i % $j) == 0) {
				$counter++;
			}
		}
		// Prime requires 2 rules ( divisible by 1 and divisible by itself ) 
		if ($counter == 2) {
			print($i) . " is prime <br /> ";
		}
	}

}

primeNum(50);

/* Example */

// function primeNo($n){

//   for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

//           $counter = 0; 
//           for($j=1;$j<=$i;$j++){ //all divisible factors


//                 if($i % $j==0){ 

//                       $counter++;
//                 }
//           }

//         //prime requires 2 rules ( divisible by 1 and divisible by itself ) 
//         if($counter==2){

//                print $i." is Prime <br/>";
//         }
//     }
// } 

// primeNo(100); 


/* Example 2 */

// $count = 0;  
// $num = 2;  
// while ($count < 15 )  
// {  
// 	$div_count=0;  
// 	for ( $i=1; $i<=$num; $i++)  
// 	{  
// 		if (($num%$i)==0)  
// 		{  
// 		$div_count++;  
// 		}  
// 	}  
// 	if ($div_count<3)  
// 	{  
// 		echo $num." , ";  
// 		$count=$count+1;  
// 	}  
// 	$num=$num+1;  
// }  


