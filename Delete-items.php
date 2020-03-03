<?php

require "Process/ItemsInsert.php";

$Items = new Items();

$delete = $Items->delete($_GET['id']);

// if($create === TRUE)
header("location: List-Storage.php");

