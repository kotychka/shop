<?php

// $fp = fopen("counter.txt", "r+");
// fputs($fp, "Hello world");

// $buf = fgets($fp);

// echo $buf;

// fclose($fp);

// $buf = file("counter.txt");
// $buf = file_get_contents("counter.txt");

$fp = fopen("example.csv", "r");
while ($data = fgetcsv ($fp, 1000, ";")) {
	// $num = count ($data);
	// for ($i=0; $i < $num; $i++) {
	  	echo  $data[0] . "|" . $data[1] . "|" . $data[2] ."<br/>";
	// }

	echo "<br>";
}