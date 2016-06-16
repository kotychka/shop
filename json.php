<?php

include "data.php";

header("Content-Type: application/json");

// var_dump($products);

// print_r($products);

echo json_encode($products);

// function json($data) {
// 	$result = "[";
// 	foreach ($data as $id => $product) {
// 		$result = $result . "{";

// 		foreach ($product as $key => $value) {
// 			$result .= "'" . $key . "':'" . $value . "',";
// 		}

// 		$result = trim($result, ",");

// 		$result = $result . "}";
// 	}

// 	$result = trim($result, ",");
// 	$result .= "]";

// 	return $result;
// }

// echo "{'title': 'example'}";
