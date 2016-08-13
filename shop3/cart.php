<?php session_start(); ?>

<?php include_once 'src/Data.php'; ?>
<?php include_once 'src/Render.php'; ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta charset='utf-8'>
        <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="assets/css/grid.css">

        <script type="text/javascript" src="assets/js/jquery-2.2.2.js"></script>

        <script type="text/javascript" src="assets/js/main.js"></script>
    </head>
    <body>
    <header>
        <h1><?php echo "Shop" ?></h1>
        <nav>
            <ul>
                <li><a href="products.html">Продукты</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="cart.html">Корзина</a></li>
            </ul>
        </nav>
        <a href="/toggle.php?currency=0">$</a> | <a href="/toggle.php?currency=1">p</a>

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

            <?php $products = $render->prepare($data, $ids) ?>

            <table>
                <th><td>Заголовок</td><td>Цена</td><td>Количество</td></th>

                <?php foreach ($products as $product): ?>
                <tr><td><?php echo $product->title; ?></td><td><?php echo $product->price; ?></td><td><?php echo $product->qnt; ?></td></tr>
                <?php endforeach; ?>
            </table>

        </div>

        <div class="buffer"></div>
    </div>

    <footer>
        &copy; LevelUP
    </footer>
    </body>
    </html>

<?php

function add(ProductInterface $p) {

}
