<?php

if (!isset($_POST["name"]) 
	|| !isset($_POST['email'])
	|| !isset($_POST['message'])) {
	
	exit();
}


$fd = fopen('messages', 'a'); // r w r+(w+) a

if (!$fd) {
	die("File Error");
} else {

	$message = "Name: ". $_POST['name'] . "\n";
	$message .= "Email: " . $_POST['email'] . "\n";
	$message .= "Message: ". $_POST['message'] . "\n"; 

	fputs($fd, $message."\n\n");
}

fclose($fd);

header("Location: /contact");