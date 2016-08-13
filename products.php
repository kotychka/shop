<?php session_start() ?>

<?php

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
	<script type="text/javascript" src="assets/js/main.js" defer></script>
</head>

<body>
	
	<header>
		<h1>Shop</h1>
		<nav>
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="about.html">О нас</a></li>
				<li><a href="cart.php">Корзина</a></li>
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

 		<?php foreach ($data->products as $index => $product) {?>
			<div class="l-grid3 s-grid6">
				<div class=product>
					<?php $product->title(); ?>
					<div><img src="<?php echo $product->img() ?>" alt="Alt"></div>
					<span><?php echo $product->price() ?></span>
				</div>
				<div class="button">
					<a href="/add.php?id=<?php echo $index ?>" class="-product-link" data-id="<?php echo $index ?>">В корзину</a>
				</div>
			</div>
		<?php } ?>
			
		</div>
	</div>

	<div class="buffer"></div>
	
	<footer>
		&copy; LevelUp
	</footer>
</body>

</html>

<?php

function add(ProductInterface $p) {

}

?>