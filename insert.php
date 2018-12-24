<?php
/*
db.php : database connection page name
*/ 
require('db.php');
	$status = "";
	if(isset($_POST['new']) && $_POST['new']==1)
		{
			$name =$_REQUEST['name'];
			$age = $_REQUEST['age'];
			$ins_query="insert into html_sql_table_CodeingTags (`name`,`age`) values ('$name','$age')";
			mysqli_query($con,$ins_query) or die(mysql_error());
			$status = "New Record Inserted Successfully.";
		}
?>

<!DOCTYPE html>
	<html>
		<head>
		</head>
		<body>
				<form name="form" method="post" action=""> 
					<input type="hidden" name="new" value="1" />
					<p><input type="text" name="name" placeholder="Enter Name" required /></p>
					<p><input type="text" name="age" placeholder="Enter Age" required /></p>
					<p><input name="submit" type="submit" value="Submit" /></p>
				</form>
				<p style="color:#FF0000;"><?php echo $status; ?></p>
</body>
</html>
