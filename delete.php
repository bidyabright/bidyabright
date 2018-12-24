<?php
/*
dp.php : batabase connection file name
id : SQL table row ID name (it's require primary)
$con : database connection ID name (its related on database connection page)
Location: view.php : when you delete its go back to this page
Website: https://www.allphptricks.com/
*/

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM html_sql_table_CodeingTags WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>