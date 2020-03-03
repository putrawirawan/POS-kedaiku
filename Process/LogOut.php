<?php

session_start();
session_unset("Users");
session_destroy();
header("Location: ../Login.php");
