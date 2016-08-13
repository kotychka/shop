<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/post.php">
		<input name="numbers"></input>
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
		</select>

		<input type="submit"></input> 
	</form>
</body>
</html>

<?php

if (!isset($_POST["numbers"]) || !isset($_POST["operator"])) {
	exit();
}

$operator = $_POST["operator"];
$numbers = explode(",", $_POST["numbers"]);

switch ($operator) {
	case '+':
		echo sum($numbers);
		break;
	case '-':
		echo minus($numbers);
		break;
}

function sum($nums) {
	$result = 0;
	foreach ($nums as $key => $value) {
		$result += $value;
	}

	return $result;
}

function minus($nums) {
	$result = $nums[0];

	for ($i = 1; $i < count($nums); $i++) {
		$result -= $nums[$i];
	}

	return $result;
}