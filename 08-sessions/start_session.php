<?php
//Start Session
session_start();

//Set Session Variables
$_SESSION['username']="admin";
$_SESSION['email']="admin@gmail.com";
$_SESSION['loggedin']=true;

echo "Session variables are set.";