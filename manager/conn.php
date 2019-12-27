<?php
	$conn = new mysqli('localhost', 'root', '', 'db_myproject');
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>