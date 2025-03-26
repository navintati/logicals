<?php
/////// Occurrences //////////////////////////
function countCharacterOccurrences($str)
{ 
    $charCount = []; 
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (isset($charCount[$char])) { 
            $charCount[$char]++; 
        } else { 
            $charCount[$char] = 1; 
        } 
    } 

    return $charCount; 
} 

$string = "hello world";
$result = countCharacterOccurrences($string);
foreach ($result as $key => $value) {
    echo $key."-".$value." ";
}
/////// isPalindrome //////////////////////////
$input = "nayan";
$len = strlen($input);
$isPalindrom = true;
for($i=0;$i<=$len / 2;$i++)
{
    if($input[$i] !== $input[$len - $i - 1])
    {
        $isPalindrom = false;
        break;
    } 
}
if($isPalindrom)
{
    echo "This is Palindrome";
} else {
    echo "Not is Palindrome";
}
/////// PrimeNo //////////////////////////
for ($i = 1; $i <= 100; $i++) { 
    $b = 0; 
    for ($j = 1; $j <= $i; $j++) { 
        if ($i % $j == 0) { 
            $b = $b + 1; 
        } 
    } 
    if ($b == 2) { 
        echo ' ' . $i; 
    } 
} 
/////// isPalindrome //////////////////////////
$number = 14141;
$original = $number;
$reverse = 0;
while ($number > 0) {
    $reminder = $number % 10; // Modulus is for Reminder
    $reverse = ($reverse * 10) + $reminder;
    $number = (int) ($number / 10);
}
if ($original == $reverse) {
    echo "This Palindrome";
} else {
    echo "This Not Palindrome";
}
/////// Swipe to var //////////////////////////
$a = 11;
$b = 22;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "A = " . $a . " B = " . $b;
/////// string reverce //////////////////////////
$str = "hello";
$reversedStr = "";
$length = 0;
while (isset($str[$length])) {
    $length++;
}
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}
echo "Original String: $str <br>";
echo "Reversed String: $reversedStr";
/////// Pyramid //////////////////////////
function triangle($n)
{

	$k = 2 * $n - 2;
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $k; $j++)
			echo " &nbsp";
		$k = $k - 1;
		for ($j = 0; $j <= $i; $j++) {

			// printing stars
			echo "* ";
		}
		echo "<br />";
	}
}
$n = 5;
triangle($n);



