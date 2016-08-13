<?php
include "data.php";

class Foo {
	public $name = "string";
	public function hello() {
		return $this->name;
	}
}

$int = 1;
$float = 2.7;
$string = "string";
$bool = true;
$array = array(1, 2, 3);
$dict = array("a" => 1, "b" => 2,  "c" => 3);
$obj = new Foo();
echo $obj->hello();
$null = null;

// $int = "string";

$result = $int + 1;

$products = array(
	"one" => 1,
	"two" => 2,
);

// foreach ($products as $key => $value) {
// 	echo $key  . ":" . $value;  ?> <br/> <?php 
// }

// function hello($value='Lena') {
// 	return $value;
// }

// $name = hello("Artem");
// echo $name;
// $name = hello();
// echo $name;