<?php

session_start();

//Unset all session variables
$_SESSION=array();

//Destroy the array
session_destroy();

echo "Session Destroyed";

?>