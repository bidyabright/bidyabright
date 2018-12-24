<?php
require('db.php'); //database page link to this page "dp.php"
?>

<!-- HTML PAGE CODE START -->
<html> 
<body>
<table> <!-- HTML TABLE START -->
<thead>
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Age</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>
	<?php
		$count=1; //repert row start
		$sel_query="Select * from html_sql_table_CodeingTags ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
			while($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?php echo $count; ?></td> <!-- SQL Table row ID -->
					<td><?php echo $row["name"]; ?></td> <!-- SQL Table Row name ID -->
					<td><?php echo $row["age"]; ?></td> <!-- SQL table Row age ID -->
					<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td> <!-- SQL delete code also edit.php is related on editphp page -->
					<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td> <!-- SQL Delete code also delete.php  -->
				</tr>
		<?php $count++; } //repert row end
	?>
</tbody>
</table> <!-- HTML TABLE END -->
</body>
</html>
<!-- HTML PAGE CODE END -->