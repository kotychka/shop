<?php session_start();
include 'data.php';
include 'src/Data.php';
include 'src/Render.php';
?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
	<script	 type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js" defer></script></head>

<body>
	<header>
		<h1></h1>
		<nav>
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="about.html">О нас</a></li>
			</ul>
		</nav>
		<a href="/toggle.php?currency=0">$</a> | <a href="/toggle.php?currency=1">Р</a>

 		<?php
			$ids = array();
			if (isset($_SESSION["products"])) {
				$ids = $_SESSION["products"];
			}

			$data = new Data();
			$render = new Render();
		?>

		<div id="cart"><?php if(count($ids) > 0): ?> <?php echo $render->HTML($data, $ids) ?> <?php else: ?>Корзина пуста<?php endif; ?></div>
	</header>
		
	<div class="clear"></div>

	<div class="wrapper">
		<div class="container">

		<?php $products = $render->prepare($data, $ids) ?>

		<table>
			<th>
				<td>Наименование товара</td>
				<td>Цена товара</td>
				<td>Количество товара</td>
				
			</th>
			<?php foreach ($products as $product): ?>
			<tr><td><?php echo $product->title; ?></td><td><?php echo $product->price; ?></td><td><?php echo $product->qnt; ?></td></tr>
		<?php endforeach; ?>
		</table>

		</div>

	</div>

	<div class="buffer"></div>

	<footer>
		&copy; LevelUp
	</footer>
</body>

</html>