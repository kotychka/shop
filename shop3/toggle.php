<?php

session_start();

$_SESSION["currency"] = $_GET["currency"];

header("Location: /products.php");