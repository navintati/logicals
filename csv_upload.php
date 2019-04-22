<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', '');
define ('DATABASE', 'test');

$conn = mysqli_connect(HOST,USER,PASS,DATABASE);

// $file = fopen("sample.csv", "r");

// while (!feof($file)) {
	
// 	$data = fgetcsv($file);
	 
// 	if (!empty($data)) {
		
// 		$tbl1 = mysqli_real_escape_string($conn, $data[1]);
// 		$tbl2 = mysqli_real_escape_string($conn, $data[2]);
// 		$tbl3 = mysqli_real_escape_string($conn, $data[3]);
// 		$tbl4 = mysqli_real_escape_string($conn, $data[4]);
// 		$tbl5 = mysqli_real_escape_string($conn, $data[5]);

// 		$query = "INSERT INTO csv (name, last, age, count, demo) VALUES ('$tbl1', '$tbl2', '$tbl3', '$tbl4', '$tbl5' )";

// 		$res = mysqli_query($conn, $query);

// 		if ($res > 0) {
// 			echo "SUCCESS"."<br />";
// 		} else {
// 			echo "Failed";
// 		}

// 	}

// }


// Example 2

$filename = 'sample.csv';

// The nested array to hold all the arrays
$the_big_array = []; 

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $the_big_array[] = $data;		
  }

  // Close the file
  fclose($h);
}

// Display the code in a readable format
// echo "<pre>";
// // var_dump($the_big_array);
// print_r($the_big_array);
// echo "</pre>";

unset($the_big_array[0]);

if (!empty($the_big_array)) {
	echo "<pre>"; print_r($the_big_array); echo "</pre>"; die();
	
		$tbl1 = mysqli_real_escape_string($conn, $the_big_array[1]);
		$tbl2 = mysqli_real_escape_string($conn, $the_big_array[2]);
		$tbl3 = mysqli_real_escape_string($conn, $the_big_array[3]);
		$tbl4 = mysqli_real_escape_string($conn, $the_big_array[4]);
		$tbl5 = mysqli_real_escape_string($conn, $the_big_array[5]);

		$query = "INSERT INTO csv (name, last, age, count, demo) VALUES ('$tbl1', '$tbl2', '$tbl3', '$tbl4', '$tbl5' )";

		$res = mysqli_query($conn, $query);

		if ($res > 0) {
			echo "SUCCESS"."<br />";
		} else {
			echo "Failed";
		}

	}

?>