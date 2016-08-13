<?php
session_start();

include "src/Data.php";
include "src/Render.php";

$id = $_GET["id"];

if (isset($_SESSION["products"])) {
    $ids = $_SESSION["products"];
} else {
    $ids = array();
}

$ids[] = $id;

$_SESSION["products"] = $ids;

$data = new Data();
$render = new Render();
echo $render->HTML($data, $ids);

header("Location: http://localhost:8080/products.php");