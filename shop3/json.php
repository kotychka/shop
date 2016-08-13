<?php
include "data.php";

header("Content-Type: application/json");

echo json_encode($products);

// function json($data) {
// 	$result = "[";

// 	foreach ($data as $index => $product) {
// 		$result = $result . "{";

// 		foreach ($product as $key => $value) {
// 			$result .= "'" . $key . "':'" . $value . "',";
// 		}

// 		$result = trim($result, ",");
// 		$result = $result . "},";
// 	}

// 	$result = trim($result, ",");
// 	$result .= "]";

// 	return $result;
// }
