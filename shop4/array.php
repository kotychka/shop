
<!DOCTYPE html>
<html>
<head>
    <title>Grid</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/grid.css">
</head>
<body>
<?php
// http://php.net/manual/ru/book.array.php
$a = array(
	"a" => 1,
	"b" => 2
);

$fruits = array("аапельсин", "lemon", "orange", "banana", "apple");

// sort($fruits);

uasort($fruits, function($a, $b){
	if ($a == $b) {
		return 0;
	}

	return ($a < $b)? -1 : 1;
});

// var_dump($fruits);


$b = array_map(function($item){
	return $item * $item;
}, $a);

var_dump($a);
var_dump($b);

?>
</body>
</html>