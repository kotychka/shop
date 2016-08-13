<?php

$user = "root";
$pass = "123";
$host = "localhost";
$dbname = "shop";

try{
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch(PDOExeption $e) {
	echo "PROExeption:".$e->getMessage();
}

$title = "example4";
$descrition = "example descr4";
$price = 12.1;

// $sth = $dbh->prepare("INSERT INTO products(title, description, price) 
// 	VALUES($title, $description, $price)");

$sth = $dbh->prepare('INSERT INTO products(title, description, price) VALUES(?, ?, ?)');

$sth->bindParam(1, $title);
$sth->bindParam(2, $descrition);
$sth->bindParam(3, $price);

$sth->execute();
