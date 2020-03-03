<?php

require "Process/ItemsInsert.php";

$items = new Items();
$payload = [
	'items_name' => $_POST['items_name'],
	'description' => $_POST['description'],
	'quantity' => $_POST['quantity'],
	'price_buy' => $_POST['pirce_buy'],
	'price_sell' => $_POST['price_sell']
];

$create = $items->create($payload);

// if($create === TRUE)
header("location: List-Storage.php");
