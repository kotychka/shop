<?php

// $fp = fopen("counter.txt", "r+");
// fputs($fp, "Hello, World!");

// $buffer = fread($fp, 100000);

// echo $buffer;

// fclose($fp);


// $buffer = file("counter.txt");
// $buf = file_get_contents("counter.txt");
// var_dump($buffer);
// var_dump($buf);


$fp = fopen("example.csv", "r");
$count = 1;
while ($data = fgetcsv($fp, 1000, ";")) {
	$num = count($data);
	$count++;
	for ($i=0; $i < $num; $i++) {
		echo $data[$i] . "|";
	}

	echo "<br>";
}