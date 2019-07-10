<?php

/* Example 1 */
$count = 0 ;
$f1 = 0;
$f2 = 1;
// echo $f1." , ";
// echo $f2." , ";
while ($count < 20 )
{
  $f3 = $f2 + $f1 ;
  echo $f3." , ";
  $f1 = $f2 ;
  $f2 = $f3 ;
  $count = $count + 1;
}

echo " <br /> <br /> ";
/* Example 2 */

$t = 0;
$t1 = 1;
$t2 = 0;

for ($i = 1; $i <= 10; $i++) { 
  echo $t."<br />";
  $t = $t1+$t2;
  $t1 = $t2;
  $t2 = $t;
}

?>