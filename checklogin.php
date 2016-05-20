<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$servername = "localhost";
	$username = "busseekeri_yortz";
	$password = "8eHWqQ9hy6tYXfOG";
	$db = "busseekeri_se";
	session_start();

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	$conn->query("SET NAMES UTF8");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$username = $_POST['username'];
	$password = $_POST['password']; 

	$result = $conn->query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");

  	if ($result->num_rows) { 
        $_SESSION['username'] = $username;
        echo 'Logged in Please wait for redirect!';
        header('Refresh: 1; URL=http://stockseeker.busseeker.in.th/insertNews.php');
    } 
   else
   	{
  		// do what u like here if not activated
  		echo 'Wrong User!';
        header('Refresh: 1; URL=http://stockseeker.busseeker.in.th/Login.php');

    }
?>