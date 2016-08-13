<?php
 session_start();

 if(isset($_POST["login"]) && $_POST["login"] == "artem" && isset($_POST["password"]) && $_POST["password"] == "123") {
 	setcookie("id", "artem");
 }

 if(isset($_POST["login"]) && $_POST["login"] == "lena" && isset($_POST["password"]) && $_POST["password"] == "123") {
 	setcookie("id", "lena");
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php if (isset($_COOKIE["id"])) { ?>

 	<div>Вы уже внутри</div>

 <?php } else { ?>

 	<form action="/login.php" method="POST">
 		<label>Login</label><br>
 		<input type="text" name="login"/> <br>
 		<label>Password</label><br>
 		<input type="password" name="password"><br>
 		<input type="submit" value="in">
 	<form/>

 <?php } ?>

<br>
<a href="/user.php">User</a>

</body>
</html>