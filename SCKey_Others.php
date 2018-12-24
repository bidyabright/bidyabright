<!-- SQL TABLE : sql_table_sckeyothers
SQL TABLE ROW : SCKeyOthers_Heading,SCKeyOthers_Paragraph,SCKeyOthers_Code,SCKeyOthers_Output,SCKeyOthers_Note
SQL CONNECTION ID : $PluginsParagraph,'$PluginsCode,$PluginsOutput,$PluginsNote
TEXTBOX NAME : SCKeyOthers_Heading,SCKeyOthers_Paragraph,SCKeyOthers_Code,SCKeyOthers_Output,SCKeyOthers_Note
FORM NAME : newplugins
-->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
.Shortcutkey_Window_widget{
	padding: 1px 0px;
    box-shadow: 0 1px 1px 0 #C7C7C7 inset;
    background: none repeat scroll 0 0 #E9E9E9;}
}
</style>
<body>
	<div class="row Shortcutkey_Window_widget"> <!-- HTML Font START -->
	<?php
		$count=1; //repert row start
		$sel_query="Select * from sql_table_sckeyothers ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
	while($row = mysqli_fetch_assoc($result)) {
	?>
	
	<!-- ==========card start part -1================ -->
	<div class="col-12 col-sm-4">
		<div class="card card-shadow M-BT-15 P-15">

			<h4 class="card-title-sc"><?php echo $row["SCKeyOthers_Heading"]; ?></h4>
				<!-- card content -->
				<p class="card-text-sc"><?php echo $row["SCKeyOthers_Paragraph"]; ?></p>
				<!-- card down text and button content -->
				<p class="card-text"><small class="text-muted"><?php echo $row["SCKeyOthers_Note"]; ?></small></p>
				<!-- Button trigger modal -->
			</div>
		</div>
		<?php $count++; } //repert row end
		?>
	</div>
</body>
</html>