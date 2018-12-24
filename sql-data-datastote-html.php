<html>
<head>
<title>insert data in database using mysqli</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h2>HTML</h2>
<hr/>
<form action="" method="post">
<label>heading</label>
<input type="text" name="html_heading" id="heading" required="required" placeholder="Please Enter Name"/><br /><br />
<label>paragraph</label>
<textarea rows="4" cols="50" type="text" name="html_paragraph" id="paragraph" required="required"  placeholder="Enter the content"></textarea><br /><br />
<label>Code</label>
<textarea type="text" name="html_code" id="code" required="required"  placeholder="Please Enter Your City"></textarea>
<label>output</label>
<textarea type="text" name="html_output" id="output" required="required"  placeholder="Please Enter Your City"></textarea>
<label>subtext</label>
<textarea type="text" name="html_subtext" id="subtext" required="required"  placeholder="Please Enter Your City"></textarea>
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>

<?php
if(isset($_POST["submit"])){
$servername = "localhost"; //server name
$username = "root"; //user mane
$password = "root"; //databese password
$dbname = "bidyabright"; //databese name  $dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO htmltutorial (HTML_heading, HTML_paragraph, HTML_code, HTML_output, HTML_subtext)
VALUES ('".$_POST["html_heading"]."','".$_POST["html_paragraph"]."','".$_POST["html_code"]."','".$_POST["html_output"]."', '".$_POST["html_subtext"]."')"; //sql is the database table all row name and VALUE is the form text filed name

if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
} else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>











<?php
// Attempt select query execution
$sql = "SELECT * FROM `htmltutorial`"; //table SQL Query code
if($result = mysqli_query($conn, $sql)){ //"$conn is the database connect name" and "$sql is the table connect name"
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['HTML_heading'] . "</td>"; //SQL table row1 names
                echo "<td>" . $row['HTML_paragraph'] . "</td>"; //SQL table row2 names
                echo "<td>" . $row['HTML_code'] . "</td>"; //SQL table row3 names
                echo "<td>" . $row['HTML_output'] . "</td>"; //SQL table row4 names
                echo "<td>" . $row['HTML_subtext'] . "</td>"; //SQL table row4 names
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



?>










</body>
</html>
