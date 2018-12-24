<!-- SQL TABLE NAME : html_sql_table_table
SQL database ROW ID : Table_Heading,Table_Paragraph,Table_Code,Table_Output,Table_Note
SQL Conectin ID : $TableHeading,$TableParagraph,$TableCode,$TableOutput,$TableNote
Fome Name : newtable
FoRM  textbox names : Table_Heading,Table_Paragraph,Table_Code,Table_Output,Table_Note -->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
.register_Frame_widget{padding: 1px 0px;
    box-shadow: 0 1px 1px 0 #C7C7C7 inset;
    background: none repeat scroll 0 0 #E9E9E9;}
</style>
<body>
	<div>
		<div class="register_table_widget"> <!-- HTML TABLE START -->
		<?php
			$count=1; //repert row start
			$sel_query="Select * from html_sql_table_table ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
			$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
		while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="html_tutorial">
			<h3><?php echo $row["Table_Heading"]; ?></h3> <!-- SQL Table Row name ID -->
			<p><?php echo $row["Table_Paragraph"]; ?></p> <!-- SQL table Row age ID -->
			<div class="code-section">
				<div class="code-box">
					<div class="sub-heading">CODE</div>
					<?php echo $row["Table_Code"]; ?>
					</div> <!-- SQL table Row age ID -->
					<div class="output-box">
						<div class="sub-heading">CODE</div>
						<?php if($row['Table_Heading'] != ""): ?>
						<img src="uploads/<?php echo $row['Table_Output']; ?>" width="100%" height="auto">
						<?php else: ?>
						<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
						<?php endif; ?>
						
						</div> <!-- SQL table Row age ID -->
					</div>
					<div class="note-box"><?php echo $row["Table_Note"]; ?></div> <!-- SQL table Row age ID -->
				</div>
				<?php $count++; } //repert row end
				?>
			</div>
		</div>
	</body>
</html>