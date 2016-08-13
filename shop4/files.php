<?php

$fd = fopen('download.txt', 'a'); // r w r+(w+) a

if (!$fd) {
	die("File Error");
} else {
	// echo "file:";
	// $buff = fread($fd, 100);
	// echo $buff;

	fputs($fd, "heellloo!\n");
}

fclose($fd);

// $file_array = file('download.txt');
// if (!$file_array) {
// 	die("File Error");
// } else {
// 	// var_dump($file_array);
// }

$file_content = file_get_contents('download.txt');
echo "File Content:". $file_content; 

// file_put_contents("download.txt", "hello world!");