<!-- SQL TABLE:insert html_sql_table_animation
SQL ROW: Animation_Heading,Animation_Paragraph,Animation_Code,Animation_Output,Animation_Note
CONNECTION ID:$AnimationHeading,$AnimationParagraph,$AnimationCode,$AnimationOutput,$AnimationNote
TEXTBOX NAME : Animation_Heading,Animation_Paragraph,Animation_Code,Animation_Output,Animation_Note
FORM NAME: newanimation -->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
	.register_Animation_widget{background: #cccccc9e; padding: 1px 0px;}
	.html_tutorial h3{color: #1f0178;}
</style>
<body>
	<div>
		<div class="register_Animation_widget"> <!-- HTML Animation START -->
		<?php
			$count=1; //repert row start
			$sel_query="Select * from html_sql_Table_Animation ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
			$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
		while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="html_tutorial">
			<h3><?php echo $row["Animation_Heading"]; ?></h3> <!-- SQL Animation Row name ID -->
			<p><?php echo $row["Animation_Paragraph"]; ?></p> <!-- SQL Animation Row age ID -->
			<div class="code-section">
				<div class="code-box">
					<div class="sub-heading">CODE</div>
					<?php echo $row["Animation_Code"]; ?>
					</div> <!-- SQL Animation Row age ID -->
					<div class="output-box">
						<div class="sub-heading">CODE</div>
						<?php if($row['Animation_Heading'] != ""): ?>
						<img src="uploads/<?php echo $row['Animation_Output']; ?>" width="100%" height="auto">
						<?php else: ?>
						<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
						<?php endif; ?>
						
						</div> <!-- SQL Animation Row age ID -->
					</div>
					<div class="note-box"><?php echo $row["Animation_Note"]; ?></div> <!-- SQL Animation Row age ID -->
				</div>
				<?php $count++; } //repert row end
				?>
			</div>
		</div>
	</body>
</html>