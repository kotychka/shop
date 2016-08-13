<?php
session_start();

if(isset($_POST["login"]) && $_POST["login"] == "artem" 
	&& isset($_POST["password"]) && $_POST["password"] == "123") {

	// $_SESSION["id"] = "artem";
	setcookie("id", "artem");
}

if(isset($_POST["login"]) && $_POST["login"] == "lena" 
	&& isset($_POST["password"]) && $_POST["password"] == "123") {

	// $_SESSION["id"] = "lena";
	setcookie("id", "lena");
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
</head>
<body>
<?php if (isset($_COOKIE["id"])) { ?>
	<div>Вы уже внутри!</div>
<?php } else { ?>
	<form action="/login.php" method="POST">
		<label>Login</label><br>
		<input type="text" name="login"/> <br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<input type="submit" value="in">
	</form>
<?php  }?>


</body>
</html>
<?
// $_SESSION['name'] = "value";

// $example = @$_SESSION["example"];

// var_dump($example);

// if (isset($_SESSION['counter'])) {
// 	$counter = $_SESSION['counter'];
// } else {
// 	$counter = 0;
// }

// echo $counter;

// $counter++;

// $_SESSION['counter'] = $counter;
