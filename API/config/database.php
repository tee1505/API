<?php
$host = "localhost";
$username = "it67040233114";
$password = "X0A8T9V7";
$db = "it67040233114";
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
die(json_encode([
"status" => 500,
"message" => "Database connection failed"
]));
}
?>