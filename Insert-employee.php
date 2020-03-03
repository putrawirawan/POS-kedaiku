<?php 

require "Process/UserInsert.php";

$Users = new Users();
$payload = [
	'username' => $_POST['username'],
	'email' => $_POST['email'],
	'address' => $_POST['address'],
	'phone' => $_POST['phone'],
	'gender' => $_POST['gender'],
	'user_pict' => $_FILES['user_pict']['name']
];

$create = $Users->create($payload);

// if($create === TRUE)
header("location: Data-Employee.php");
