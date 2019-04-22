<?php


// Example 1
$string = "I am a boy";

$reversed = "";
$tmp = "";
for($i = 0; $i < strlen($string); $i++) {
    if($string[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    $tmp = $string[$i] . $tmp;    
}
$reversed .= $tmp;

print $reversed . PHP_EOL;

//Output ==>> [ I ma a yob ]

// Example 2
$str = "I am a boy";

$teststr = explode(" ",$str);

for($i=count($teststr)-1;$i>=0;$i--)
{
  echo $teststr[$i] . " ";
}

// Output ==>> [ boy a am I ]


// Prime Numbers
function primeno($n){

  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

               print $i." is Prime <br/>";
        }
    }
} 

primeno(50);
/* Output ==>>
2 is Prime 
3 is Prime 
5 is Prime 
7 is Prime 
11 is Prime 
13 is Prime
*/