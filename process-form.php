<?php

$name= $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if(! $terms){
	die("Terms must be accepted");
}

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysql_connect(hostname: $host,
                      username: $username,
                      password: $password,
                      database: $dbname);



if (mysqli_connect_errno()) {
	die("Connection error: " . mysqli_connect_error());
}

echo "Connection successful.";

?>