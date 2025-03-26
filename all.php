<?php
// Occurrences
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
// Example usage
$string = "hello world";
$result = countCharacterOccurrences($string);

foreach ($result as $key => $value) {
    echo $key."-".$value." ";
}

// isPalindrome
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








