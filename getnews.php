<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "se";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully<br>";
	if ($result = $conn->query("SELECT * FROM news")) {
	    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    	}
    	echo json_encode($myArray);
	}
 ?>