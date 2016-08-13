<?php

// $data = file_get_contents("http://yande.ru");

// $tmp = json_decode($data, true);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://jsonplaceholder.typicode.com/posts/1");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
$res = curl_exec($ch);
curl_close($ch);

var_dump($res);