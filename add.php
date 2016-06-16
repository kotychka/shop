<?php

session_start();

$id = $_GET["id"];

if (isset($_SESSION["products"])) {
	$products = $_SESSION["products"];
} else {
	$products = array();
}

$products[] = $id;

$_SESSION["products"] = $products;

var_dump($_SESSION["products"]);