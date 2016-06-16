<?php

$data = file_get_contents("http://jsonplaceholder.typicode.com/posts/1");

$tmp = json_decode($data);

// var_dump($tmp);

echo $tmp->title;

