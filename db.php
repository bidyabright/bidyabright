
<?php

//DATABRASE NAME : registerv1
//TABLE NAME : htmllearn
//TABLE ROW NAMES : HTML_heading, HTML_paragraph, HTML_code
//DATABASE CONNECTION ID : $con;

// Server connection
$servername = "localhost"; //server name
$username = "root"; //user mane
$password = "root"; //databese password
$dbname = "bidyabright"; //databese name $dbname = "registerv1";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>