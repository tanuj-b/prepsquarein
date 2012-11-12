<?php

function getConnection() {
	$dbhost = "localhost";
	$dbuser = "dbuser";
	$dbpass = "trial";
	$dbname = "edu";
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>
