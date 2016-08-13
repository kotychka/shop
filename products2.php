<?php session_start(); ?>

<?php include_once 'src/Data.php'; ?>
<?php include_once 'src/Render.php'; ?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
	<script	type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body>
	<header>
		<h1>Shop</h1>
		<nav>
			<ul>
				<li><a href="products.php">Продукты</a></li>
				<li><a href="about.html">О нас</a></li>
				<li><a href="cart.html">Корзина</a></li>
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

	<div class="wrapper">
		<div class="container">

			<?php foreach ($data->$products as $index => $product) { ?>
				<div class="l-grid3 s-grid6">
						<?php $product->title(); ?>
						<div><img src="<?php echo $product->img() ?>" alt="Alt"></div>
 						<span><?php echo $product->price() ?></span>
						<a href="javascript:{}" class="product-link" data-id="<?php echo $index ?>">В корзину</a>
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

