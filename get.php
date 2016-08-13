<?php

// $data = file_get_contents("http://jsonplaceholder.typicode.com/posts/1");

// $tmp = json_decode($data);

// // var_dump($tmp);

// echo $tmp->title;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://jsonplaceholder.typicode.com/posts/1");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
$res = curl_exec($ch);
curl_close($ch);

var_dump($res);