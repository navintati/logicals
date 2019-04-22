<?php

// Example 1
function priNumbers($num)
{
	if ($num <= 20) {
		echo $num . " ";
		priNumbers(++$num);
	}
}

$num = 1;
priNumbers($num);


// // Example 2
// function numbers($num)
// {
//  if ($num > 0) {
//    //echo $num  . " ";
//   numbers($num - 1);
//   echo $num . " ";
//   }
// }

// $num = 10;
// numbers($num);


// // Example 3
// print_num(1);

// function print_num($num)
// {
// 	echo $num . " ";
// 	if($num==10)
//   		return;
// 		print_num(++$num);
// }



