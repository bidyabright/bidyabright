<?php
require('db.php');
	$id=$_REQUEST['id'];
	$query = "SELECT * from html_sql_table_CodeingTags where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
	<html>
		<head>
		</head>
		<body>
		<div>
			<?php
				$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
					$id=$_REQUEST['id'];
					$name =$_REQUEST['name'];
					$age =$_REQUEST['age'];
					$update="update html_sql_table_CodeingTags set name='".$name."', age='".$age."' where id='".$id."'";
					mysqli_query($con, $update) or die(mysqli_error());
					
					$status = "Record Updated Successfully.";
					echo '<p style="color:#FF0000;">'.$status.'</p>';
				}else {
			?>
			<div>
				<form name="form" method="post" action=""> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
					<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
					<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>
					<p><input name="submit" type="submit" value="Update" /></p>
				</form>
			<?php } ?>
			</div>
</div>
</body>
</html>
