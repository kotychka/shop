<?php

session_start();

if (!isset($_COOKIE['id'])) {
	die("Exit");
}

echo "Hello " . $_COOKIE["id"];

?>

<a href="/out.php">Out</a>