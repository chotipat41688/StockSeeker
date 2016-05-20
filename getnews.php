<?php 
	header("content-type:text/javascript;charset=utf-8");   
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	function raw_json_encode($input) {
	 	return preg_replace_callback( '/\\\\u([0-9a-zA-Z]{4})/',
			create_function(
	            '$matches',
	            'return mb_convert_encoding(pack("H*",$matches[1]),"UTF-8","UTF-16");'
	        ),
	  json_encode($input));
	}



	$servername = "localhost";
	$username = "busseekeri_yortz";
	$password = "8eHWqQ9hy6tYXfOG";
	$db = "busseekeri_se";

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

	echo raw_json_encode($myArray);
 ?>