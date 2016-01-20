<?php
	$host = "localhost";
	$gebruiker = "root";
	$wachtwoord = "root";
	$database = "kpn";
	
	
	$verbinding = mysql_connect("$host", "$gebruiker", "$wachtwoord")
	or die("Verbinding met de server mislukt vanwege:" . mysql_error());
	
	$db = mysql_select_db("$database", $verbinding) or die("Database error: " . mysql_error());
?>