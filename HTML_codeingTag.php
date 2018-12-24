<!-- Table : html_sql_table_CodeingTags
SQL ROW ID : Codeing_Tag_Heading, Codeing_Tag_Paragraph, Codeing_Tag_Code, Codeing_Tag_Output, Codeing_Tag_Note
ID : $CodeingTagHeading, $CodeingTagParagraph, $CodeingTagCode, $CodeingTagOutput,  $CodeingTagNote
FORM NAME : newcodeingtag
Textbox Name : Codeing_Tag_Heading, Codeing_Tag_Paragraph, Codeing_Tag_Code, Codeing_Tag_Output, Codeing_Tag_Note -->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
</style>
<body>
	<div>
		<div class="register_table_widget"> <!-- HTML TABLE START -->
		<?php
			$count=1; //repert row start
			$sel_query="Select * from html_sql_table_CodeingTags ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
			$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
		while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="html_tutorial">
			<h3><?php echo $row["Codeing_Tag_Heading"]; ?></h3> <!-- SQL Table Row name ID -->
			<p><?php echo $row["Codeing_Tag_Paragraph"]; ?></p> <!-- SQL table Row age ID -->
			<div class="code-section">
				<div class="code-box">
					<div class="sub-heading">CODE</div>
					<?php echo $row["Codeing_Tag_Code"]; ?>
					</div> <!-- SQL table Row age ID -->
					<div class="output-box">
						<div class="sub-heading">CODE</div>
						<?php if($row['Codeing_Tag_Heading'] != ""): ?>
						<img src="uploads/<?php echo $row['Codeing_Tag_Output']; ?>" width="100%" height="auto">
						<?php else: ?>
						<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
						<?php endif; ?>
						
						</div> <!-- SQL table Row age ID -->
					</div>
					<div class="note-box"><?php echo $row["Codeing_Tag_Note"]; ?></div> <!-- SQL table Row age ID -->
				</div>
				<?php $count++; } //repert row end
				?>
			</div>
		</div>
	</body>
</html>