<?php

// session_start();

// if (!isset($_SESSION['id']) || $_SESSION['id'] != 1) {
// 	echo "Nooooo!";
// 	exit();
// }

if (!isset($_COOKIE['id']) || $_COOKIE['id'] != 1) {
	echo "Nooooo!";
	exit();
}

echo "I'm admin";

?>

<a href="/logout.php">Log Out</a>