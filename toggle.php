<?php

session_start();

$_SESSION["currency"] = $_GET["currency"];

header("Location: http://localhost:8080/products.php");

die();