<?php include "header.php" ?>

<?php include "db.php" ?>

<?php foreach ($products as $id => $product) { ?>
	<div class="product">
		<h3><?php echo $product["title"] ?></h3>
		<img src="<?php echo $product["img"] ?>" />
		<a href="#" onclick="addToCart(this)" data-id="0" data-title="IpHone">Add To Cart</a>
		<span><?php echo  $product["price"]  ?></span>
		<div class="description">
			Событие - это сигнал от браузера о том, что что-то произошло. Существует много видов событий.
		</div>
	</div>
<?php } ?>

	<div id="cart-holder">
		<div id="cart"><!-- Empty -->
		<ul>
			
		</ul>
		</div>
		<!-- <a href="#" onclick="rmFromCart()">Remove</a> -->
	</div>
</body>
</html>