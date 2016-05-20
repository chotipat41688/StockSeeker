<?php 
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "se";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	$conn->query("SET NAMES UTF8");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully<br>";
	if ($result = $conn->query("SELECT * FROM (SELECT * FROM news WHERE type=1 ORDER BY id DESC LIMIT 2) sub ORDER BY id ASC")) {
	    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    	}
    }
    if ($result = $conn->query("SELECT * FROM (SELECT * FROM news WHERE type=2 ORDER BY id DESC LIMIT 3) sub ORDER BY id ASC")) {
	    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    	}
    }
    if ($result = $conn->query("SELECT * FROM (SELECT * FROM news WHERE type=3 ORDER BY id DESC LIMIT 3) sub ORDER BY id ASC")) {
	    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    	}
	}
	echo json_encode($myArray,JSON_UNESCAPED_UNICODE);
 ?>