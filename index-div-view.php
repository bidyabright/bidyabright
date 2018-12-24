
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



<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.register_table{
			display: block;
			boder: 2px solid #ccc;
			background: green;
		}
		.inside_text{
			background: yellow;
			margin: 30px;
		}
		.count{
			border: 10px; font-size: 20px;
		}
		.name{
			font-size: 45px;
		}
		.age{
			color: blue;
		}
	</style>
</head>
<body>
<div>
<p><a href="insert.php">Insert New Record</a></p>
<div class="register_table"> <!-- HTML TABLE START -->
	<?php
		$count=1; //repert row start
		$sel_query="Select * from html_sql_table_CodeingTags ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
			while($row = mysqli_fetch_assoc($result)) { ?>
				 <div class="inside_text">
					<div class="count"><?php echo $count; ?></div> <!-- SQL Table row ID -->
					<div class="name"><?php echo $row["name"]; ?></div> <!-- SQL Table Row name ID -->
					<div class="age"><?php echo $row["age"]; ?></div> <!-- SQL table Row age ID -->
					<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td> <!-- SQL delete code also edit.php is related on editphp page -->
					<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td> <!-- SQL Delete code also delete.php  -->
				</div>
		<?php $count++; } //repert row end
	?>
</div>




</div>
</body>
</html>
