<?php session_start();
include 'data.php'; ?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<header>
		<h1></h1>
		<nav>
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="about.html">О нас</a></li>
			</ul>
		</nav>
	</header>
		
	<div class="clear"></div>

	<div class="wrapper">
		<div class="container">

		<table id="cartpage">
			<tr>
				<td>Наименование товара</td>
				<td>Цена товара</td>
				<td>Количество товара</td>
				<td>Стоимость</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

		</table>

		</div>

	</div>

	<div class="buffer"></div>

	<footer>
		&copy; LevelUp
	</footer>
</body>

</html>