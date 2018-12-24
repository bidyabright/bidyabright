<!-- SQL TABLE NAME : html_sql_table_form
SQL TABLE ROW : Form_Heading,Form_Paragraph,Form_Code,Form_Output,Form_Note
SQL TABLE ID : $FormHeading,$FormParagraph,$FormCode,$FormOutput,$FormNote
Textbox NAME : Form_Heading,Form_Paragraph,Form_Code,Form_Output,Form_Note
FOMR NAME : newform -->
<?php
require('db.php');

?>
<!DOCTYPE html>
<style type="text/css">
.register_Form_widget{padding: 1px 0px;
    box-shadow: 0 1px 1px 0 #C7C7C7 inset;
    background: none repeat scroll 0 0 #E9E9E9;}
</style>
<body>
	<div>
		<div class="register_Form_widget"> <!-- HTML Form START -->
		<?php
			$count=1; //repert row start
			$sel_query="Select * from html_sql_Table_Form ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
			$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
		while($row = mysqli_fetch_assoc($result)) { ?>
		<div class="html_tutorial">
			<h3><?php echo $row["Form_Heading"]; ?></h3> <!-- SQL Form Row name ID -->
			<p><?php echo $row["Form_Paragraph"]; ?></p> <!-- SQL Form Row age ID -->
			<div class="code-section">
				<div class="code-box">
					<div class="sub-heading">CODE</div>
					<?php echo $row["Form_Code"]; ?>
					</div> <!-- SQL Form Row age ID -->
					<div class="output-box">
						<div class="sub-heading">CODE</div>
						<?php if($row['Form_Heading'] != ""): ?>
						<img src="uploads/<?php echo $row['Form_Output']; ?>" width="100%" height="auto">
						<?php else: ?>
						<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
						<?php endif; ?>
						
						</div> <!-- SQL Form Row age ID -->
					</div>
					<div class="note-box"><?php echo $row["Form_Note"]; ?></div> <!-- SQL Form Row age ID -->
				</div>
				<?php $count++; } //repert row end
				?>
			</div>
		</div>
	</body>
</html>