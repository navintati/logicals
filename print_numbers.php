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
// Output ==>> 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20

// Example 2
function numbers($num)
{
 if ($num > 0) {
   //echo $num  . " ";
  numbers($num - 1);
  echo $num . " ";
  }
}
$num = 10;
numbers($num);
// Output ==>> 1 2 3 4 5 6 7 8 9 10

// Example 3
print_num(1);
function print_num($num)
{
	echo $num . " ";
	if($num==10)
  		return;
		print_num(++$num);
}
// Output ==>> 1 2 3 4 5 6 7 8 9 10


