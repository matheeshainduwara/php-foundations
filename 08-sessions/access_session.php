<?php
session_start();

//Set Session Variables
$_SESSION['username']="admin";
$_SESSION['email']="admin@gmail.com";
$_SESSION['loggedin']=true;

echo "Session variables are set<br>";

// Access session variables
	if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    		echo "Welcome " . $_SESSION["username"] . "!<br>";
    		echo "Your email address is " . $_SESSION["email"] . ".";
	} else {
   	 	echo "Please log in first.";
	}
?>
