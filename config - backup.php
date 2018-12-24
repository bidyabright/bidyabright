<?php

//DATABRASE NAME : htmlcontent
//TABLE NAME : htmllearn
//TABLE ROW NAMES : HTML_heading, HTML_paragraph, HTML_code

// Server connection
$servername = "localhost"; //server name
$username = "root"; //user mane
$password = "root"; //databese password
$dbname = "bidyabright"; //databese name $dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>