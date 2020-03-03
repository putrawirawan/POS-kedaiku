<?php

require "Process/UserInsert.php";

$Users = new Users();

$delete = $Users->delete($_GET['id']);

// if($create === TRUE)
header("location: Data-Employee.php");


?>