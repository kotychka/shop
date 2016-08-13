<?php 
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grid</title>
    <meta charset="utf-8" />
</head>
<body>
<?php if (isset($_COOKIE['id'])): ?>
	<a href="/logout.php">Log Out</a>
<?php else: ?>
	<form method="POST" action="/login.php">
		<input type="text" name="login"></input><br/>
		<input type="password" name="password"></input><br/>
		<input type="submit"></input>
	</form>
<?php endif; ?>
</body>
</html>

<?php

if (!isset($_POST["login"]) 
	|| !isset($_POST['password'])) {
	
	exit();
}

if ($_POST["login"] == "admin" 
	&& $_POST["password"] == "123") {

	setcookie("id", 1);

	// $_SESSION["id"] = 1;

	header("Location: /user.php");
}

