<!-- SQL TABLE : html_sql_table_Plugins
SQL TABLE ROW : Plugins_Heading,Plugins_Paragraph,Plugins_Code,Plugins_Output,Plugins_Note
SQL CONNECTION ID : $PluginsParagraph,'$PluginsCode,$PluginsOutput,$PluginsNote
TEXTBOX NAME : Plugins_Heading,Plugins_Paragraph,Plugins_Code,Plugins_Output,Plugins_Note
FORM NAME : newplugins
-->
<?php
require('db.php');
?>
<!DOCTYPE html>
<style type="text/css">
.modal-body{
	overflow: scroll;
	white-space: normal;
}
</style>
<body>
	<div class="row"> <!-- HTML Font START -->
	<?php
		$count=1; //repert row start
		$sel_query="Select * from html_sql_Table_Plugins ORDER BY id desc;"; //SQL QUERY ALL IS REQUIRYED id is important
		$result = mysqli_query($con,$sel_query); //$con database connect ID and $sel_query SQL connection ID
	while($row = mysqli_fetch_assoc($result)) {
	?>
	
	<!-- ==========card start part -1================ -->
	<div class="col-12 col-sm-4">
		<div class="card card-shadow M-B-30">

			<h4 class="card-title"><?php echo $row["Plugins_Heading"]; ?></h4>
			<?php if($row['Plugins_Heading'] != ""): ?>
			<img src="uploads/<?php echo $row['Plugins_Output']; ?>" width="100%" height="auto" class="card-img-top">
			<?php else: ?>
			<img src="images/default.png" width="auto" height="400px" style="border:1px solid #333333;">
			<?php endif; ?>
			<div class="card-block">
				<!-- card content -->
				<p class="card-text"><?php echo $row["Plugins_Paragraph"]; ?></p>
				<!-- card down text and button content -->
				<p class="card-text"><small class="text-muted"><?php echo $row["Plugins_Note"]; ?></small></p>
				<div class="card-footer">
					<a class="btn btn-default pull-right" role="button" data-toggle="modal" data-target="#exampleModalLong5"><i class="glyphicon glyphicon-edit"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
					<a href="#" class="btn btn-code-card" role="button">HTML</a>
					<a href="#" class="btn btn-code-card" role="button">CSS</a>
					<a href="#" class="btn btn-code-card" role="button">JS</a></div>
				</div>
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"><h5 class="modal-title" id="exampleModalLongTitle"></h5>
								
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<?php echo $row["Plugins_Code"]; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $count++; } //repert row end
		?>
	</div>
</body>
</html>