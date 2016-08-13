<?php

include "src/ProductInterface.php";
include "src/Phone.php";
include "src/Notebook.php";

$products = array(
	new Phone("example", 100),
	new Phone("example2", 101),
	new Phone("example3", 102),
	new Phone("example", 100),
	new Phone("example2", 101),
	new Phone("example3", 102),
	new Phone("example", 100),
	new Phone("example2", 101),
);