<?php
	$conn = new mysqli('localhost', 'root', '', 'cpuaai');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>