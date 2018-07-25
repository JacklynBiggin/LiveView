<?php
$config = require_once "../../config.php";
$enteredPassword = htmlspecialchars($_POST['password']);

// This is overly complicated as a reminder for me to make this
// authentication actually authenticate. This is crap.
if($enteredPassword == $config["techPassword"]) {
	echo "true";
	setcookie("tech", true, time()+3600);
} else {
	echo "false";
}